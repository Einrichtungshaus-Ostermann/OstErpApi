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

namespace OstErpApi\Services;

interface TimerServiceInterface
{
    /**
     * ...
     *
     * @param string $key
     */
    public function start($key = 'default');

    /**
     * ...
     *
     * @param string $key
     */
    public function reset($key = 'default');

    /**
     * ...
     *
     * @param string $key
     *
     * @return string
     */
    public function get($key = 'default'): string;

    /**
     * ...
     *
     * @param string $key
     */
    public function display($key = 'default');
}
