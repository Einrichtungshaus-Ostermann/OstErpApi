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

namespace OstErpApi\Api\Gateway\Iwm\Mapping\Store;

use OstErpApi\Api\Gateway\Iwm\Mapping\Mapping;

class Company implements Mapping
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
        return 'STORE_COMPANY';
    }
}
