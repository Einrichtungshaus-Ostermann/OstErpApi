<?php






namespace OstErpApi\Services;


interface TimerServiceInterface
{





    public function start( $key = "default" );


    public function reset( $key = "default" );


    public function get( $key = "default" );


    public function display( $key = "default" );

}
