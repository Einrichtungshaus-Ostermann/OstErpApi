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

namespace OstErpApi\Api\Hydrator;

use OstErpApi\Struct;

class Article extends Hydrator
{


    public function hydrate( array $data): array
    {

        $arr = array();

        foreach ( $data as $article )
        {

            $articleStruct = new Struct\Article();

            $articleStruct->setNumber( (string) $article['__article_number'] );
            $articleStruct->setName( (string) $article['__article_name'] );
            $articleStruct->setWeight( (float) $article['__article_weight'] );


            foreach ( $article['__article_stock'] as $stock )
            {
                $stockStruct = new Struct\Article\Stock();

                $stockStruct->setLocation( $stock['__stock_location']);
                $stockStruct->setStock( $stock['__stock_stock']);

                $articleStruct->addStock( $stockStruct );

            }

            array_push( $arr, $articleStruct );
        }




        return $arr;
    }

    
}
