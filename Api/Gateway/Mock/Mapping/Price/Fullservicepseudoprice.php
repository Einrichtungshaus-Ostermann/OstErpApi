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

namespace OstErpApi\Api\Gateway\Mock\Mapping\Price;

use OstErpApi\Api\Gateway\Mock\Mapping\Mapping;

class Fullservicepseudoprice implements Mapping
{
    /**
     * {@inheritdoc}
     */
    public static function getAlias(): string
    {
        return "";
    }

    /**
     * {@inheritdoc}
     */
    public static function getColumn(): string
    {
        return 'PRICE_FULLSERVICEPSEUDOPRICE';
    }
}
