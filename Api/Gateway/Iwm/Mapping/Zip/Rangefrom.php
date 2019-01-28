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

namespace OstErpApi\Api\Gateway\Iwm\Mapping\Zip;

use OstErpApi\Api\Gateway\Iwm\Mapping\MappingAbstract;

class Rangefrom extends MappingAbstract
{
    /**
     * {@inheritdoc}
     */
    public static $type = self::TYPE_STRING;

    /**
     * {@inheritdoc}
     */
    public static $alias = 'ZIP_RANGEFROM';

    /**
     * {@inheritdoc}
     */
    public static $column = 'IWMV2R1SYS.LFBT00.L2PLZV';
}
