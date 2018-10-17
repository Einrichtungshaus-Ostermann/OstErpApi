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

class Parser
{






    public function parse( $query, $addAlias = true )
    {




        // get the placeholders
        preg_match_all( '/\[[^\]]*\]/', $query, $matches );



        // loop them
        foreach ( $matches[0] as $match )
        {
            // remove braces
            $match = str_replace( array( "[", "]" ), "", $match );

            // split by entity and key
            $split = explode( ".", $match );

            // set vars for it
            $entity = $split[0];
            $key    = $split[1];




            // create object name
            /* @var $mapping Mapping */
            $mapping = __NAMESPACE__ . "\\" . ucwords( $entity ) . "\\" . ucwords( $key );






            $replace = $mapping::getColumn();




            if ( $addAlias == true )
                $replace .= " AS " . $mapping::getAlias();





            // replace
            $query = str_replace(
                "[" . $match . "]",
                $replace,
                $query
            );
        }



        // and return it
        return $query;
    }





    public function parseSelect( $query )
    {
        return $this->parse( $query, true );
    }



    public function parseParameter( $query )
    {
        return $this->parse( $query, false );
    }


}
