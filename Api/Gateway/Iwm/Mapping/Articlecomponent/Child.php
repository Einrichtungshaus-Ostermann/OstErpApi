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

namespace OstErpApi\Api\Gateway\Iwm\Mapping\Articlecomponent;

use OstErpApi\Api\Gateway\Iwm\Mapping\MappingAbstract;

class Child extends MappingAbstract
{
    /**
     * {@inheritdoc}
     */
    public static $type = self::TYPE_STRING;

    /**
     * {@inheritdoc}
     */
    public static $alias = 'ARTICLECOMPONENT_NUMBER';

    /**
     * {@inheritdoc}
     */
    public static $column = 'IWMV2R1DTA.VSET00.VSARTK';
}
