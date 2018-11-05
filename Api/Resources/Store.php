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

class Store extends Resource
{
    protected $name = 'Store';


    public function findBy(array $params = [], array $options = []): array
    {
        $adapter = $adapter = $this->configuration['adapter'];;

        /** @var Gateway $gateway */
        $gateway = Shopware()->Container()->get('ost_erp_api.api.gateway.' . strtolower($adapter) . '.store');

        $storesArr = $gateway->findBy($params);

        foreach ($storesArr as $key => $store) {
            /* @var $companyResource Company */
            $companyResource = Shopware()->Container()->get('ost_erp_api.api.resources.company');

            $company = $companyResource->findOneBy([
                "[company.key] = '" . $store['STORE_COMPANY'] . "'"
            ]);


            $store['STORE_COMPANY'] = $company;

            $storesArr[$key] = $store;
        }

        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.store');

        return $hydrator->hydrate($storesArr);
    }
}
