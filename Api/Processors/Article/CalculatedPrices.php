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

namespace OstErpApi\Api\Processors\Article;

use OstErpApi\Struct;

class CalculatedPrices
{
    /**
     * ...
     *
     * @param Struct\Article $article
     */
    public function process(Struct\Article $article)
    {
        $stores = Shopware()->Container()->get('ost_erp_api.api')->findAll('store');

        $now = time();

        /* @var $store Struct\Store */
        foreach ($stores as $store) {
            $defaultPrices = [];
            $myPrices = [];

            foreach ($article->getPrices() as $price) {
                if (($now >= $price->getStartDate()->getTimestamp()) && ($now <= $price->getEndDate()->getTimestamp())) {
                    if (($price->getStore() !== null) && ($price->getStore()->getKey() === $store->getKey())) {
                        $defaultPrices[] = $price;
                    } else {
                        $myPrices[] = $price;
                    }
                }
            }

            /* @var $myPrice Struct\Price */
            $myPrice = null;

            /* @var $price Struct\Price */
            foreach ($defaultPrices as $price) {
                if ($myPrice === null) {
                    $myPrice = $price;
                    continue;
                }

                if ($myPrice->getStartDate()->getTimestamp() < $price->getStartDate()->getTimestamp()) {
                    $myPrice = $price;
                }
            }

            /* @var $price Struct\Price */
            foreach ($myPrices as $price) {
                if ($myPrice === null) {
                    $myPrice = $price;
                    continue;
                }

                if ($myPrice->getStartDate()->getTimestamp() < $price->getStartDate()->getTimestamp()) {
                    $myPrice = $price;
                }
            }

            // do we even have a price?
            if ($price === null) {
                continue;
            }

            $struct = new Struct\CalculatedPrice();

            $struct->setNumber($price->getNumber());
            $struct->setStore($store);
            $struct->setPseudoPrice($price->getPickupPseudoPrice());

            switch ($article->getCompany()->getKey()) {
                case 1:

                    $obj = new CalculatedPrices\Ostermann();
                    $obj->process(
                        $struct,
                        $price,
                        $article
                    );

                    break;
                case 3:

                    $obj = new CalculatedPrices\Trends();
                    $obj->process(
                        $struct,
                        $price,
                        $article
                    );

                    break;
            }

            $article->addCalculatedPrice($struct);
        }
    }
}
