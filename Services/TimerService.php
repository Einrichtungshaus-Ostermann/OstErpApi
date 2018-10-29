<?php declare(strict_types=1);

namespace OstErpApi\Services;

class TimerService implements TimerServiceInterface
{
    private $timer = [];



    public function start($key = 'default')
    {
        $this->timer[$key] = microtime();
    }



    public function reset($key = 'default')
    {
        $this->start($key);
    }



    public function get($key = 'default')
    {
        if (!isset($this->timer[$key])) {
            $this->start($key);
        }


        $time_start = explode(' ', $this->timer[$key]);
        $time_end = explode(' ', microtime());
        $parse_time = number_format($time_end[1] + $time_end[0] - ($time_start[1] + $time_start[0]), 3, ',', '.');

        return $parse_time;
    }



    public function display($key = 'default')
    {
        if (!isset($this->timer[$key])) {
            echo 'starting ' . $key . '<br>';
        }


        $var = $this->get($key);

        echo $key . ': ' . $var . '<br>';
    }
}
