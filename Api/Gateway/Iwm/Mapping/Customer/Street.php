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

use OstErpApi\Api\Gateway\Iwm\Mapping\MappingAbstract;

class Street extends MappingAbstract
{
    /**
     * {@inheritdoc}
     */
    public static $type = self::TYPE_STRING;

    /**
     * {@inheritdoc}
     */
    public static $alias = 'CUSTOMER_STREET';

    /**
     * {@inheritdoc}
     */
    public static $column = 'CAST(IWMADROLIB.ADRS00.ADLSTR AS VARCHAR(255) CCSID 1208)';
}
