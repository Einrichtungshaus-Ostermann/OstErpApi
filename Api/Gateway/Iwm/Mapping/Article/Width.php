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

class Width extends MappingAbstract
{
    /**
     * {@inheritdoc}
     */
    public static $type = self::TYPE_FLOAT;

    /**
     * {@inheritdoc}
     */
    public static $alias = 'ARTICLE_WIDTH';

    /**
     * {@inheritdoc}
     */
    public static $column = 'IWMV2R1DTA.ARTS00.ARDIM1';
}
