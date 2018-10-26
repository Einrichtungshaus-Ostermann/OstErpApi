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

namespace OstErpApi\Api\Gateway\Iwm\Mapping\Price;

use OstErpApi\Api\Gateway\Iwm\Mapping\Mapping;

class Startdate implements Mapping
{
    public static function getAlias()
    {
        return 'PRICE_STARTDATE';
    }

    public static function getColumn()
    {
        return "( IWMV2R1DTA.PREI00.PRDGBJ || '-' || IWMV2R1DTA.PREI00.PRDGBM || '-' || IWMV2R1DTA.PREI00.PRDGBT || ' 23:59:59' )";
    }
}
