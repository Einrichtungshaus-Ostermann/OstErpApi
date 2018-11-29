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

class TimerService implements TimerServiceInterface
{
    /**
     * ...
     *
     * @var array
     */
    private $timer = [];

    /**
     * {@inheritdoc}
     */
    public function start($key = 'default')
    {
        $this->timer[$key] = microtime();
    }

    /**
     * {@inheritdoc}
     */
    public function reset($key = 'default')
    {
        $this->start($key);
    }

    /**
     * {@inheritdoc}
     */
    public function get($key = 'default'): string
    {
        if (!isset($this->timer[$key])) {
            $this->start($key);
        }

        $time_start = explode(' ', $this->timer[$key]);
        $time_end = explode(' ', microtime());
        $parse_time = number_format($time_end[1] + $time_end[0] - ($time_start[1] + $time_start[0]), 3, ',', '.');

        return $parse_time;
    }

    /**
     * {@inheritdoc}
     */
    public function display($key = 'default')
    {
        if (!isset($this->timer[$key])) {
            echo 'starting ' . $key . '<br>';
        }

        $var = $this->get($key);

        echo $key . ': ' . $var . '<br>';
    }
}
