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

use OstErpApi\Api\ArrayTrait;
use OstErpApi\Api\Gateway\Gateway;
use OstErpApi\Api\Hydrator\Hydrator;

abstract class Resource
{
    use ArrayTrait;



    protected $name;



    public function findBy(array $params = [], array $options = []): array
    {
        $adapter = Shopware()->Container()->get('ost_erp_api.configuration')['adapter'];


        /** @var Gateway $gateway */
        $gateway = Shopware()->Container()->get('ost_erp_api.api.gateway.' . strtolower($adapter) . '.' . strtolower($this->name));

        $dataArr = $gateway->findBy($params);

        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.' . strtolower($this->name));

        return $hydrator->hydrate($dataArr);
    }



    public function findOneBy(array $params = [], array $options = [])
    {
        return $this->findBy($params, $options)[0] ?? null;
    }




    // $params = array( "warneke", "58300" );

    public function searchBy(array $params): array
    {

        $dir = Shopware()->Container()->getParameter( "ost_erp_api.plugin_dir" ) . "/" .
            "Api/Gateway/" .
            ucwords( Shopware()->Container()->get('ost_erp_api.configuration')['adapter'] ) . "/" .
            "Mapping/" .
            ucwords( $this->name ) . "/";

        $files = glob( $dir . "*.php" );


        $columns = array();

        foreach ( $files as $file )
            array_push( $columns, str_replace( array( $dir, ".php" ), "", $file ) );



        $where = array();

        foreach ( $params as $param )
        {
            $current = array();

            foreach ( $columns as $column )
                array_push( $current, "UPPER([" . strtolower( $this->name ) . "." . strtolower( $column ) . "]) LIKE UPPER('%" . $param . "%')" );


            array_push(
                $where,
                implode( " OR ", $current )
            );
        }






        return $this->findBy( $where );


    }




}
