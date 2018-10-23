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

namespace OstErpApi\Api\Resources;

use OstErpApi\Api\Gateway\Gateway;
use OstErpApi\Api\Gateway\ParserInterface;
use OstErpApi\Api\Hydrator\Hydrator;

abstract class Resource
{
    protected $name;

    public function findBy(array $params = [], array $options = []): array
    {
        $adapter = Shopware()->Container()->get( "ost_erp_api.configuration_service" )->get( "adapter" );




        /** @var Gateway $gateway */
        $gateway = Shopware()->Container()->get('ost_erp_api.api.gateway.' . strtolower($adapter) . '.' . strtolower($this->name));

        $dataArr = $gateway->findBy($params);

        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.' . strtolower($this->name));

        return $hydrator->hydrate($dataArr);
    }

    protected function isOptionTrue(array $options, string $optionName): bool
    {
        return isset($options[$optionName]) && $options[$optionName] === true;
    }





    // [company.key] > 1
    // [company.name] = 'Ostermann']
    protected function findInArray( array $data, array $params = array() )
    {
        if ( count( $params ) == 0 )
            return $data;



        $adapter = Shopware()->Container()->get( "ost_erp_api.configuration_service" )->get( "adapter" );





        /* @var $parser ParserInterface */
        $parser = Shopware()->Container()->get( "ost_erp_api.api.gateway." . $adapter . ".mapping.parser" );



        $arrParams = array();


        foreach ( $params as $param )
        {
            $split = explode( " ", $param );

            $arr = array(
                'column' => $parser->parseParameter( $split[0] ),
                'operator' => $split[1],
                'value' => $split[2]
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
