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

namespace OstErpApi\Api\Gateway\Mock\Mapping\Customer;

use OstErpApi\Api\Gateway\Mock\Mapping\Mapping;

class Number implements Mapping
{
    public static function getAlias()
    {

    }

    public static function getColumn()
    {
        return 'CUSTOMER_NUMBER';
    }
}
