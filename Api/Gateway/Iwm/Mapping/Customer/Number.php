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

class Number extends MappingAbstract
{
    /**
     * {@inheritdoc}
     */
    public static $type = self::TYPE_INTEGER;

    /**
     * {@inheritdoc}
     */
    public static $alias = 'CUSTOMER_NUMBER';

    /**
     * {@inheritdoc}
     */
    public static $column = 'IWMADROLIB.ADRS00.ADANUM';
}
