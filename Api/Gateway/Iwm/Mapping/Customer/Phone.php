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

class Phone extends MappingAbstract
{
    /**
     * {@inheritdoc}
     */
    public static $type = self::TYPE_STRING;

    /**
     * {@inheritdoc}
     */
    public static $alias = 'CUSTOMER_PHONE';

    /**
     * {@inheritdoc}
     */
    public static $column = 'TRIM( CONCAT( CONCAT( TRIM( IWMADROLIB.ADRS00.ADTELV ), \' \' ), TRIM( IWMADROLIB.ADRS00.ADTELN ) ) )';
}
