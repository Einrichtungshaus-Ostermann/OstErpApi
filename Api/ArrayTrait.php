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

namespace OstErpApi\Api;



trait ArrayTrait
{




    // [company.key] > 1
    // [company.name] = 'Ostermann']
    protected function findInArray( array $data, array $params = array() )
    {
        if ( count( $params ) == 0 )
            return $data;



        $adapter = Shopware()->Container()->get( "ost_erp_api.configuration_service" )->get( "adapter" );





        /* @var $parser Gateway\ParserInterface */
        $parser = Shopware()->Container()->get( "ost_erp_api.api.gateway." . $adapter . ".mapping.parser" );



        $arrParams = array();


        foreach ( $params as $param )
        {
            $split = explode( " ", $param );

            $arr = array(
                'column' => $parser->parseParameter( $split[0] ),
                'operator' => $split[1],
                'value' => trim( $split[2], "'\"" )
            );

            array_push( $arrParams, $arr );
        }




        /*

        $arrParams = array(
            array(
                'column' => "key",
                'operator' => ">",
                'value' => 1
            ),
            array(
                'column' => "name",
                'operator' => "=",
                'value' => "Ostermann"
            )
        );
        */




        $result = array();


        foreach ( $data as $row )
        {



            $valid = false;



            foreach ( $arrParams as $param )
            {

                switch ( $param['operator'] )
                {
                    case "=":

                        if ( $row[$param['column']] == $param['value'] )
                            $valid = true;

                        break;

                    case ">":

                        if ( $row[$param['column']] > $param['value'] )
                            $valid = true;

                        break;


                    default:
                        $valid = false;
                }



            }

            if ( $valid == true )
                array_push( $result, $row );

        }



        return $result;



    }
}
