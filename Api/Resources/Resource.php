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
    /*
     * ...
     */
    use ArrayTrait;

    /**
     * Name of the resource.
     *
     * @var string
     */
    protected $name;

    /**
     * ...
     *
     * @param array $params
     *
     * @return array
     */
    public function findBy(array $params = []): array
    {
        // get the adapter
        $adapter = Shopware()->Container()->get('ost_erp_api.configuration')['adapter'];

        /** @var Gateway $gateway */
        $gateway = Shopware()->Container()->get('ost_erp_api.api.gateway.' . strtolower($adapter) . '.' . strtolower($this->name));

        // find every entity
        $dataArr = $gateway->findBy($params);

        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.' . strtolower($this->name));

        // return hydrated entities
        return $hydrator->hydrate($dataArr);
    }

    /**
     * ...
     *
     *
     * @param array $params
     *
     * @return mixed|null
     */
    public function findOneBy(array $params = [])
    {
        // return the first found item or null
        return $this->findBy($params)[0] ?? null;
    }

    /**
     * Search every available column.
     *
     * Example:
     * - array( "warneke", "58300")
     *
     * @param array $params
     *
     * @return array
     */
    public function searchBy(array $params): array
    {
        // columns here
        $columns = $this->getSearchColumns();

        // create where append for the findBy()
        $where = [];

        // loop every given parameters
        foreach ($params as $param) {

            // current parameter search
            $current = [];

            // search in every available column
            foreach ($columns as $column) {
                array_push($current, 'UPPER([' . strtolower($this->name) . '.' . strtolower($column) . "]) LIKE UPPER('%" . $param . "%')");
            }

            // add to where search with OR syntax
            array_push(
                $where,
                implode(' OR ', $current)
            );
        }

        // get the adapter
        $adapter = Shopware()->Container()->get('ost_erp_api.configuration')['adapter'];

        /** @var Gateway $gateway */
        $gateway = Shopware()->Container()->get('ost_erp_api.api.gateway.' . strtolower($adapter) . '.' . strtolower($this->name));

        // find every entity
        $dataArr = $gateway->searchBy($where);

        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.' . strtolower($this->name));

        // return hydrated entities
        return $hydrator->hydrate($dataArr);
    }

    /**
     * ...
     *
     * @return array
     */
    protected function getSearchColumns(): array
    {
        // create the directory to find every column
        $dir = Shopware()->Container()->getParameter('ost_erp_api.plugin_dir') . '/' .
            'Api/Gateway/' .
            ucwords(Shopware()->Container()->get('ost_erp_api.configuration')['adapter']) . '/' .
            'Mapping/' .
            ucwords($this->name) . '/';

        // get every column
        $files = glob($dir . '*.php');

        // columns here
        $columns = [];

        // extract every column from mapping files
        foreach ($files as $file) {
            array_push($columns, str_replace([$dir, '.php'], '', $file));
        }

        // return them
        return $columns;
    }

    /**
     * ...
     *
     * @return string
     */
    protected function getAdapter(): string
    {
        // return via configuration
        return (string) Shopware()->Container()->get('ost_erp_api.configuration')['adapter'];
    }

    /**
     * ...
     *
     * @param string $gateway
     *
     * @return Gateway
     */
    protected function getGateway( $gateway ): Gateway
    {
        // ...
        return Shopware()->Container()->get('ost_erp_api.api.gateway.' . strtolower($this->getAdapter()) . '.' . $gateway);
    }

    /**
     * ...
     *
     * @param string $resource
     *
     * @return Resource
     */
    protected function getResource( $resource ): Resource
    {
        // ...
        return Shopware()->Container()->get('ost_erp_api.api.resources.' . $resource);
    }

    /**
     * ...
     *
     * @param string $hydrator
     *
     * @return Hydrator
     */
    protected function getHydrator( $hydrator ): Hydrator
    {
        // ...
        return Shopware()->Container()->get('ost_erp_api.api.hydrator.' . $hydrator);
    }
}
