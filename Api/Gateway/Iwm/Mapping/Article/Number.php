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

namespace OstErpApi\Api\Gateway\Iwm\Mapping\Article;

use OstErpApi\Api\Gateway\Iwm\Mapping\MappingAbstract;

class Number extends MappingAbstract
{
    /**
     * {@inheritdoc}
     */
    public static $type = self::TYPE_STRING;

    /**
     * {@inheritdoc}
     */
    public static $alias = 'ARTICLE_NUMBER';

    /**
     * {@inheritdoc}
     */
    public static $column = 'IWMV2R1DTA.ARTS00.ARARTE';
}
