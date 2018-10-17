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

namespace OstErpApi\Api\Gateway\Mock;

use OstErpApi\Api\Gateway\Gateway;

class Location extends Gateway
{


    public function findBy( array $parameters = array()): array
    {


        return array(
            array(
                '__location_key' => "WITTEN",
                '__location_name' => "Witten"
            ),
            array(
                '__location_key' => "LEVERKUSEN",
                '__location_name' => "Leverkusen"
            )

        );


    }

    
}
