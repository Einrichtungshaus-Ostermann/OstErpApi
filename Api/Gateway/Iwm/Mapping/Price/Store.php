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

class Store implements Mapping
{
    /**
     * {@inheritdoc}
     */
    public static function getAlias(): string
    {
        return 'PRICE_STORE';
    }

    /**
     * {@inheritdoc}
     */
    public static function getColumn(): string
    {
        return "( LPAD( IWMV2R1DTA.PREI00.PRVKHS, 2, '0' ) )";
    }
}
