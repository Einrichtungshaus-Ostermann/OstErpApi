<?php






namespace OstErpApi\Services;


class TimerService
{



    private $timer = array();




    public function start( $key = "default" )
    {


        $this->timer[$key] = microtime();
    }





    public function get( $key = "default", $reset = true )
    {

        if ( !isset( $this->timer[$key] ) )


            $this->startTimer( $key );


        $time_start = explode(' ', $this->timer[$key]);
        $time_end = explode(' ', microtime());
        $parse_time = number_format(($time_end[1] + $time_end[0] - ($time_start[1] + $time_start[0])), 3, ",", ".");


        if ( $reset == true )
            // reset it
            $this->startTimer( $key );


        return $parse_time;
    }

}
