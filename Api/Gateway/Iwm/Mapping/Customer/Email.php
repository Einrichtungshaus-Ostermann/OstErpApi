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

class Email extends MappingAbstract
{
    /**
     * {@inheritdoc}
     */
    public static $type = self::TYPE_STRING;

    /**
     * {@inheritdoc}
     */
    public static $alias = 'CUSTOMER_EMAIL';

    /**
     * {@inheritdoc}
     */
    public static $column = "CASE WHEN IWMOST1DTA.EMAL00.EMEMAL IS NOT NULL THEN IWMOST1DTA.EMAL00.EMEMAL ELSE CASE WHEN IWMOST1DTA.PLKA00.PLEMAL IS NOT NULL THEN IWMOST1DTA.PLKA00.PLEMAL ELSE '' END END";
}
