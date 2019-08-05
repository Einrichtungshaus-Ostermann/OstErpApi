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

namespace OstErpApi\Api;

use OstErpApi\Api\Resources\Resource;
use OstErpApi\Struct\Struct;

class Api
{
    /*
     * ...
     *
     * @param string $resource
     * @param array $params
     *
     * @return array
     */
    public function findBy($resource, $params = []): array
    {
        // check for separator
        if (substr_count($resource, '\\') > 0) {
            // remove them
            $resource = explode('\\', $resource);
            $resource = array_pop($resource);
        }

        /* @var Resource $resource */
        $resource = Shopware()->Container()->get('ost_erp_api.api.resources.' . strtolower($resource));

        // call the resource find-by method
        return $resource->findBy($params);
    }

    /*
     * ...
     *
     * @param string $resource
     * @param array $params
     *
     * @return Struct|null
     */
    public function findOneBy($resource, $params = [])
    {
        // just the first element from find-by
        return $this->findBy($resource, $params)[0] ?? null;
    }

    /*
     * ...
     *
     * @param string $resource
     *
     * @return array
     */
    public function findAll($resource): array
    {
        // find-by without any parameters
        return $this->findBy($resource, []);
    }

    /**
     * @param string $resource
     * @param array  $params
     *
     * @return array
     */
    public function searchBy($resource, $params = []): array
    {
        // check for separator
        if (substr_count($resource, '\\') > 0) {
            // remove them
            $resource = explode('\\', $resource);
            $resource = array_pop($resource);
        }

        /* @var Resource $resource */
        $resource = Shopware()->Container()->get('ost_erp_api.api.resources.' . strtolower($resource));

        // call the resource find-by method
        return $resource->searchBy($params);
    }
}
