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

namespace OstErpApi\Api\Gateway\Mock\Mapping;

use OstErpApi\Api\Gateway\ParserInterface;

class Parser implements ParserInterface
{
    /**
     * {@inheritdoc}
     */
    public function parse($query, $addAlias = true): string
    {
        // get the placeholders
        preg_match_all('/\[[^\]]*\]/', $query, $matches);

        // loop them
        foreach ($matches[0] as $match) {
            // remove braces
            $match = str_replace(['[', ']'], '', $match);

            // split by entity and key
            list($entity, $key) = explode('.', $match);

            // create object name
            /* @var $mapping Mapping */
            $mapping = __NAMESPACE__ . '\\' . ucwords($entity) . '\\' . ucwords($key);

            // get the column name
            $replace = $mapping::getColumn();

            // add an alias?
            if ($addAlias === true) {
                $replace .= ' AS ' . $mapping::getAlias();
            }

            // replace
            $query = str_replace(
                '[' . $match . ']',
                $replace,
                $query
            );
        }

        // and return it
        return $query;
    }

    /**
     * {@inheritdoc}
     */
    public function parseSelect($query): string
    {
        return $this->parse($query, true);
    }

    /**
     * {@inheritdoc}
     */
    public function parseParameter($query): string
    {
        return $this->parse($query, false);
    }
}
