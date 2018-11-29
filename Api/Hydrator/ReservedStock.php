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
    /**
     * {@inheritdoc}
     */
    public function hydrate(array $data): array
    {
        // hydrated array
        $arr = [];

        // loop every reserved stock
        foreach ($data as $stock) {

            // no location given?! invalid
            if ($stock['RESERVEDSTOCK_LOCATION'] === null) {
                continue;
            }

            // create struct
            $reservationStruct = new Struct\ReservedStock();

            // set flat attributes
            $reservationStruct->setNumber((string) $stock['ARTICLE_NUMBER']);
            $reservationStruct->setQuantity((int) $stock['RESERVEDSTOCK_QUANTITY']);

            // structs
            $reservationStruct->setLocation($stock['RESERVEDSTOCK_LOCATION']);
            $reservationStruct->setCompany($stock['RESERVEDSTOCK_COMPANY']);

            // add hydrated struct
            $arr[] = $reservationStruct;
        }

        // return them
        return $arr;
    }
}
