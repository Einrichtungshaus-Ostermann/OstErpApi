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

namespace OstErpApi\Api\Gateway\Iwm\Mapping\Customer;

use OstErpApi\Api\Gateway\Iwm\Mapping\Mapping;

class Zip implements Mapping
{
    public static function getAlias()
    {
        return 'CUSTOMER_ZIP';
    }

    public static function getColumn()
    {
        return 'IWMADROLIB.ADRS00.ADPL15';
    }
}
