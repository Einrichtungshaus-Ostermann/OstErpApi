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

class Reservation extends Hydrator
{
    public function hydrate(array $data): array
    {
        $arr = [];

        foreach ($data as $stock) {
            $reservationStruct = new Struct\Reservation();

            $reservationStruct->setCompany((int) $stock['ARTICLE_COMPANY']);
            $reservationStruct->setNumber((string) $stock['ARTICLE_NUMBER']);
            $reservationStruct->setLocation((string) $stock['RESERVATION_LOCATION']);
            $reservationStruct->setAmount((int) $stock['RESERVATION_AMOUNT']);

            $arr[] = $reservationStruct;
        }

        return $arr;
    }
}
