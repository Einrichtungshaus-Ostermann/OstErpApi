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

namespace OstErpApi\Api\Gateway\Mock\Mapping\Article;

use OstErpApi\Api\Gateway\Mock\Mapping\Mapping;

class Hwg implements Mapping
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
        return 'ARTICLE_HWG';
    }
}
