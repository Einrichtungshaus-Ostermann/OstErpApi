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

namespace OstErpApi\Api\Processors\Article;

use OstErpApi\Struct;
use OstErpApi\Api\Processors\ProcessorInterface;
use OstErpApi\Api\Hydrator\Hydrator;


class AvailableStock implements ProcessorInterface
{



    /**
     * ...
     *
     * @param array data
     */
    public function process( array &$data )
    {

        if ( $data['ARTICLE_TYPE'] == Struct\Article::TYPE_GROUP )
        {

            $this->processGroup( $data );

            return;
        }


        $this->processSingle( $data );





    }











    /**
     * ...
     *
     * @param array data
     */
    private function processSingle( array &$data )
    {




        // array( 'WITTEN' => array( 'ARTICLE_NUMBER' => 123, 'AVAILABLESTOCK_QUANTITY' => 1, 'AVAILABLESTOCK_STORE' => StoreStruct )
        $availableStock = array();




        /* @var $stock Struct\Stock */
        foreach ( $data['ARTICLE_STOCK'] as $stock )
        {
            if ( !$stock->getLocation() instanceof Struct\Location )
                continue;


            $store = $stock->getLocation()->getStore();

            if ( $stock->getType() != Struct\Stock::TYPE_STOCK )
                continue;

            if ( !isset( $availableStock[$store->getKey()]))
                $availableStock[$store->getKey()] = array(
                    'ARTICLE_NUMBER' => $stock->getNumber(),
                    'AVAILABLESTOCK_QUANTITY' => 0,
                    'AVAILABLESTOCK_STORE' => $store
                );


            $availableStock[$store->getKey()]['AVAILABLESTOCK_QUANTITY'] += $stock->getQuantity();
        }


        /* @var $reservedStock Struct\ReservedStock */
        foreach ( $data['ARTICLE_RESERVED_STOCK'] as $reservedStock )
        {

            if ( !$stock->getLocation() instanceof Struct\Location )
                continue;



            $store = $stock->getLocation()->getStore();


            if ( !isset( $availableStock[$store->getKey()]))
                continue;


            $availableStock[$store->getKey()]['AVAILABLESTOCK_QUANTITY'] -= $stock->getQuantity();



            if ( $availableStock[$store->getKey()]['AVAILABLESTOCK_QUANTITY'] < 0 )
                $availableStock[$store->getKey()]['AVAILABLESTOCK_QUANTITY'] = 0;

        }






        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.available_stock');

        $data['ARTICLE_AVAILABLE_STOCK'] =  $hydrator->hydrate(array_values($availableStock));








    }




    /**
     * ...
     *
     * @param array data
     */
    private function processGroup( array &$data )
    {

        $data['ARTICLE_AVAILABLE_STOCK'] = array();

    }



}
