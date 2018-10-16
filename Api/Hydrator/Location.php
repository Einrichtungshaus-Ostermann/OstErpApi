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

namespace OstErpApi\Api\Hydrator;

use OstErpApi\Struct;

class Location extends Hydrator
{


    public function hydrate( array $data): array
    {

        $arr = array();

        foreach ( $data as $location )
        {

            $locationStruct = new Struct\Location();

            $locationStruct->setKey( $location['__location_key'] );
            $locationStruct->setName( $location['__location_name'] );




            array_push( $arr, $locationStruct );
        }




        return $arr;
    }

    
}
