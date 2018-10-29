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

class Api
{
    public function findBy($resource, $params = []): array
    {
        if (substr_count($resource, '\\') > 0) {
            $resource = explode('\\', $resource);
            $resource = array_pop($resource);
        }


        /* @var Resource $resource */
        $resource = Shopware()->Container()->get('ost_erp_api.api.resources.' . strtolower($resource));

        return $resource->findBy($params);
    }



    public function findOneBy($resource, $params = [])
    {
        return $this->findBy($resource, $params)[0] ?? null;
    }



    public function findAll($resource): array
    {
        return $this->findBy($resource, []);
    }
}
