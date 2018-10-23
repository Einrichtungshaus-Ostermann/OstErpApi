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
use OstErpApi\Api\Hydrator\Hydrator;

class Article extends Resource
{

    protected $name = "Article";



    public function findBy(array $params = [], array $options = []): array
    {
        $adapter = Shopware()->Container()->get( "ost_erp_api.configuration_service" )->get( "adapter" );





        /** @var Gateway $gateway */
        $gateway = Shopware()->Container()->get('ost_erp_api.api.gateway.' . strtolower($adapter) . '.article');

        $articlesArr = $gateway->findBy($params);



        foreach ( $articlesArr as $key => $article )
        {

            /* @var $stockResource Stock */
            $stockResource = Shopware()->Container()->get('ost_erp_api.api.resources.stock');

            $stock = $stockResource->findBy( array(
                "[stock.number] = '" . $article['ARTICLE_NUMBER'] ."'"
            ));


            $article['ARTICLE_STOCK'] = $stock;




            /* @var $companyResource Company */
            $companyResource = Shopware()->Container()->get('ost_erp_api.api.resources.company');

            $company = $companyResource->findOneBy( array(
                "[company.key] = '" . $stock['ARTICLE_COMPANY'] ."'"
            ));


            $stock['ARTICLE_COMPANY'] = $company;






            $articlesArr[$key] = $article;




        }













        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.article');

        return $hydrator->hydrate($articlesArr);
    }
}
