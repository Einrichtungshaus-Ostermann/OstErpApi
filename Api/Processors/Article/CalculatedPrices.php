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


        foreach ( $stores as $store )
        {

            $price = new Struct\CalculatedPrice();

            $price->setStore( $store );
            $price->setPrice( 123.45 );

            $article->addCalculatedPrice( $price );
        }




    }




}
