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



class Exhibits implements ProcessorInterface
{



    // every article => this hwg is always in exhibit if we have stock
    private $hwg = 90;





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


        $exhibits = array();

        /* @var $stock Struct\Stock */
        foreach ( $data['ARTICLE_STOCK'] as $stock )
        {

            if ( !$stock->getLocation() instanceof Struct\Location )

                continue;



            $store = $stock->getLocation()->getStore();


            if ( (integer) $data['ARTICLE_HWG'] >= $this->hwg )
            {

                if ( ( $stock->getType() != Struct\Stock::TYPE_EXHIBIT ) and ( $stock->getType() != Struct\Stock::TYPE_STOCK ) )
                    continue;



            }
            else
            {
                if ( $stock->getType() != Struct\Stock::TYPE_EXHIBIT )
                    continue;

            }


            if ( isset( $exhibits[$store->getKey()]))
                continue;

            $exhibits[$store->getKey()] = $store;

        }

        $data['ARTICLE_EXHIBITS'] = array_values($exhibits);


    }




    /**
     * ...
     *
     * @param array data
     */
    private function processGroup( array &$data )
    {

        $data['ARTICLE_EXHIBITS'] = array();

    }


}
