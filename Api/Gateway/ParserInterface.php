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

namespace OstErpApi\Api\Gateway;

interface ParserInterface
{
    /**
     * ...
     *
     * @param string $query
     * @param bool $addAlias
     *
     * @return string
     */
    public function parse($query, $addAlias = true): string;

    /**
     * ...
     *
     * @param $query
     *
     * @return string
     */
    public function parseSelect($query): string;

    /**
     * ...
     *
     * @param $query
     *
     * @return string
     */
    public function parseParameter($query): string;
}
