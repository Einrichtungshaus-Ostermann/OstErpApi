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

class ReservedStock extends Hydrator
{
    public function hydrate(array $data): array
    {
        $arr = [];

        foreach ($data as $stock) {
            $reservationStruct = new Struct\ReservedStock();



            $reservationStruct->setNumber((string) $stock['ARTICLE_NUMBER']);
            $reservationStruct->setQuantity((int) $stock['RESERVEDSTOCK_QUANTITY']);


            if ( $stock['RESERVEDSTOCK_LOCATION'] !== null )
                $reservationStruct->setLocation($stock['RESERVEDSTOCK_LOCATION']);

            $reservationStruct->setCompany($stock['RESERVEDSTOCK_COMPANY']);


            $arr[] = $reservationStruct;
        }

        return $arr;
    }
}
