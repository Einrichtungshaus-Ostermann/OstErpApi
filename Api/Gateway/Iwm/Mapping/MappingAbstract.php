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
            // specific for strings
            case static::TYPE_STRING:

                // force string
                $value = (string) $value;

                // is this NOT utf?
                if (mb_detect_encoding($value) !== 'UTF-8') {
                    // we may not have casted this column in the query itself
                    $value = utf8_encode($value);
                }

                // do the other stuff
                return str_replace(array("'", '"'), "", trim($value));

            // every other simple type
            case static::TYPE_INTEGER: return (int) $value;
            case static::TYPE_FLOAT: return (float) $value;
            case static::TYPE_BOOLEAN: return ((string) $value === "1");
            case static::TYPE_DATETIME: return new \DateTime((string) $value);
        }

        // unknown type
        return $value;
    }
}
