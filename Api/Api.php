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



    public function findBy( $resource, $params = array()): array
    {

        /* @var Resource $resource */
        $resource = Shopware()->Container()->get( "ost_erp_api.api.resources." . strtolower( $resource ) );

        $data = $resource->findBy( $params );

        return $data;
    }




    public function findOneBy( $rescource, $params = array())
    {
        return array_unshift( $this->findBy( $rescource, $params ) );
    }


    public function findAll( $rescource ): array
    {
        return $this->findBy( $rescource, array() );
    }
}
