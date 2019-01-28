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

namespace OstErpApi\Api\Gateway\Iwm\Mapping;

abstract class MappingAbstract implements MappingInterface
{
    /**
     * @var string
     */
    const TYPE_STRING = 'string';
    const TYPE_INTEGER = 'integer';
    const TYPE_FLOAT = 'float';
    const TYPE_BOOLEAN = 'boolean';
    const TYPE_DATETIME = 'datetime';

    /**
     * @var string
     */
    public static $type = 'string';

    /**
     * @var string
     */
    public static $alias;

    /**
     * @var string
     */
    public static $column;

    /**
     * {@inheritdoc}
     */
    public static function getAlias(): string
    {
        return static::$alias;
    }

    /**
     * {@inheritdoc}
     */
    public static function getColumn(): string
    {
        return static::$column;
    }

    /**
     * {@inheritdoc}
     */
    public static function cast($value)
    {
        // switch by variable type
        switch ( static::$type )
        {
            case static::TYPE_STRING: return str_replace( array( "'", '"', ), "", utf8_encode( trim( $value ) ) );
            case static::TYPE_INTEGER: return (int) $value;
            case static::TYPE_FLOAT: return (float) $value;
            case static::TYPE_BOOLEAN: return ((string) $value === "1");
            case static::TYPE_DATETIME: return new \DateTime((string) $value);
        }

        // unknown type
        return $value;
    }
}
