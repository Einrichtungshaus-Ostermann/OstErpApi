<?php declare(strict_types=1);
/**
 * Einrichtungshaus Ostermann GmbH & Co. KG - ERP API
 *
 * @package   OstErpApi
 *
 * @author    Eike Brandt-Warneke <e.brandt-warneke@ostermann.de>
 * @copyright 2018 Einrichtungshaus Ostermann GmbH & Co. KG
 * @license   proprietary
 */

namespace OstErpApi\Api\Resources;

use OstErpApi\Api\Gateway\Gateway;
use OstErpApi\Api\Hydrator\Hydrator;

class Article extends Resource
{
    public function findBy(array $params = [], array $options = []): array
    {
        $adapter = 'Mock';

        /** @var Gateway $gateway */
        $gateway = Shopware()->Container()->get('ost_erp_api.api.gateway.' . strtolower($adapter) . '.article');

        $dataArr = $gateway->findBy($params);

        foreach ($dataArr as &$articleEntry) {
            if (!$this->isOptionTrue($options, 'noRealStock') && !$this->isOptionTrue($options, 'noStock')) {
                $articleEntry['ARTICLE_STOCK'] = Shopware()->Container()->get('ost_erp_api.api.resources.stock')->findBy([
                        '[stock.company = ]' . $articleEntry['COMPANY'],
                        '[stock.number] = ' . $articleEntry['ARTICLE_NUMBER'],
                        '[stock.type] = L'
                    ]) ?? [];
            }

            if (!$this->isOptionTrue($options, 'noRealStock') && !$this->isOptionTrue($options, 'noReservations')) {
                $articleEntry['ARTICLE_RESERVATION'] = Shopware()->Container()->get('ost_erp_api.api.resources.reservation')->findBy([
                        '[reservation.company = ]' . $articleEntry['COMPANY'],
                        '[reservation.number] = ' . $articleEntry['ARTICLE_NUMBER']
                    ]) ?? [];
            }

            if (!$this->isOptionTrue($options, 'noRealStock')) {
                $amountPerLocation = [];
                /** @var \OstErpApi\Struct\Stock $stock */
                foreach ($articleEntry['ARTICLE_STOCK'] as $stock) {
                    if ($stock->getLocation() === null) {
                        continue;
                    }

                    $amountPerLocation[$stock->getLocation()->getKey()] = $stock->getQuantity();
                }

                /* @var \OstErpApi\Struct\Reservation $stock */
                foreach ($articleEntry['ARTICLE_RESERVATION'] as $reservation) {
                    if ($reservation->getLocation() === null) {
                        continue;
                    }

                    $locationAmount = $amountPerLocation[$reservation->getLocation()->getKey()] ?? 0;

                    $locationAmount -= $reservation->getQuantity();

                    $amountPerLocation[$reservation->getLocation()->getKey()] = $locationAmount;
                }

                $articleEntry['ARTICLE_REAL_STOCK'] = [];
                foreach ($amountPerLocation as $locationKey => $amount) {
                    $stockStruct = new \OstErpApi\Struct\Stock();
                    $stockStruct->setCompany((int) $articleEntry['COMPANY']);
                    $stockStruct->setType('L');
                    $stockStruct->setQuantity($amount);

                    $location = Shopware()->Container()->get('ost_erp_api.api.resources.location')->findBy([
                            '[location.company = ]' . $articleEntry['COMPANY'],
                            '[location.key] = ' . $locationKey
                        ])[0] ?? null;

                    if ($location !== null) {
                        $stockStruct->setLocation($location);
                    }

                    $articleEntry['ARTICLE_REAL_STOCK'][] = null;
                }
            }

            if (!$this->isOptionTrue($options, 'noExhibit')) {
                $articleEntry['ARTICLE_EXHIBIT'] = [];

                $stocks = Shopware()->Container()->get('ost_erp_api.api.resources.stock')->findBy([
                        '[stock.company = ]' . $articleEntry['COMPANY'],
                        '[stock.number] = ' . $articleEntry['ARTICLE_NUMBER'],
                        '[stock.type] = K'
                    ]) ?? [];

                /** @var \OstErpApi\Struct\Stock $stock */
                foreach ($stocks as $i => $stock) {
                    if ($stock->getLocation() !== null) {
                        $articleEntry['ARTICLE_EXHIBIT'][$stock->getLocation()->getStore()->getKey()] = $stock->getLocation()->getStore();
                    }
                }
            }
        }
        unset($articleEntry);

        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.article');

        return $hydrator->hydrate($dataArr);
    }
}
