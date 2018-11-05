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

use OstErpApi\Api\ArrayTrait;
use OstErpApi\Api\Gateway\Gateway;
use OstErpApi\Api\Hydrator\Hydrator;

abstract class Resource
{
    use ArrayTrait;



    protected $name;



    public function findBy(array $params = [], array $options = []): array
    {
        $adapter = $adapter = $this->configuration['adapter'];;


        /** @var Gateway $gateway */
        $gateway = Shopware()->Container()->get('ost_erp_api.api.gateway.' . strtolower($adapter) . '.' . strtolower($this->name));

        $dataArr = $gateway->findBy($params);

        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.' . strtolower($this->name));

        return $hydrator->hydrate($dataArr);
    }



    public function findOneBy(array $params = [], array $options = [])
    {
        return $this->findBy($params, $options)[0] ?? null;
    }



    protected function isOptionTrue(array $options, string $optionName): bool
    {
        return isset($options[$optionName]) && $options[$optionName] === true;
    }
}
