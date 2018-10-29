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



class CalculatedPrices
{






    /**
     * ...
     *
     * @param Struct\Article $article
     */
    public function process( Struct\Article $article )
    {

        $stores = Shopware()->Container()->get( "ost_erp_api.api" )->findAll( "store" );


        $now = time();


        /* @var $store Struct\Store */
        foreach ( $stores as $store )
        {
            $defaultPrices = array();
            $myPrices = array();

            foreach ( $article->getPrices() as $price )
            {
                if ( ( $price->getStore() === null ) or ( $price->getStore()->getKey() === $store->getKey() ) )
                {

                    if ( ( $now >= $price->getStartDate()->getTimestamp() ) and ( $now <= $price->getEndDate()->getTimestamp() ) )
                    {

                        if ( $price->getStore() === null )
                            array_push( $defaultPrices, $price );
                        else
                            array_push( $myPrices, $price );


                    }


                }
            }


            /* @var $myPrice Struct\Price */
            $myPrice = null;

            /* @var $price Struct\Price */
            foreach ( $defaultPrices as $price )
            {
                if ( $myPrice === null )
                {
                    $myPrice = $price;
                    continue;
                }

                if ( $myPrice->getStartDate()->getTimestamp() < $price->getStartDate()->getTimestamp() )
                    $myPrice = $price;

            }

            /* @var $price Struct\Price */
            foreach ( $myPrices as $price )
            {
                if ( $myPrice === null )
                {
                    $myPrice = $price;
                    continue;
                }

                if ( $myPrice->getStartDate()->getTimestamp() < $price->getStartDate()->getTimestamp() )
                    $myPrice = $price;

            }



            // do we even have a price?
            if ( $price === null )
                continue;





            $struct = new Struct\CalculatedPrice();

            $struct->setStore( $store );
            $struct->setPrice( $price->getDeliveryPrice() );

            $article->addCalculatedPrice( $struct );
        }




    }




}
