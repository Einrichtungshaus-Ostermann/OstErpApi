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
use OstErpApi\Api\Processors\ProcessorInterface;
use OstErpApi\Services;
use OstErpApi\Struct;

class Article extends Resource
{
    protected $name = 'Article';



    public function findBy(array $params = [], array $options = []): array
    {
        $adapter = Shopware()->Container()->get('ost_erp_api.configuration_service')->get('adapter');

        /* @var $timer Services\TimerService */
        $timer = Shopware()->Container()->get('ost_erp_api.timer_service');
        $timer->display('article');

        /** @var Gateway $gateway */
        $gateway = Shopware()->Container()->get('ost_erp_api.api.gateway.' . strtolower($adapter) . '.article');
        $articlesArr = $gateway->findBy($params);

        foreach ($articlesArr as $key => $article) {
            $this->addChildren($article);
            $this->addStock($article);
            $this->addReservedStock($article);
            $this->addCompany($article);
            $this->addLabel($article);
            $this->addPrices($article);
            $this->addAvailableStock($article);
            $this->addExhibits($article);

            $articlesArr[$key] = $article;
        }

        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.article');
        $data = $hydrator->hydrate($articlesArr);

        $this->addCalculatedPrices($data);
        $timer->display('article');

        return $data;
    }



    private function addCalculatedPrices(array &$articles)
    {
        /* @var $processor ProcessorInterface */
        $processor = Shopware()->Container()->get('ost_erp_api.api.processors.article.calculated_prices');

        foreach ($articles as $article) {
            $processor->process($article);
        }
    }



    private function addChildren(array &$article)
    {
        if ($article['ARTICLE_TYPE'] !== Struct\Article::TYPE_GROUP) {
            return;
        }

        $adapter = Shopware()->Container()->get('ost_erp_api.configuration_service')->get('adapter');

        /** @var Gateway $articleComponentGateway */
        $articleComponentGateway = Shopware()->Container()->get('ost_erp_api.api.gateway.' . strtolower($adapter) . '.article_component');

        $components = $articleComponentGateway->findBy([
            '[articlecomponent.number] = ' . $article['ARTICLE_NUMBER']
        ]);


        $article['ARTICLE_CHILDREN'] = [];

        /*
         * $company = array(
         *     'ARTICLE_NUMBER' => parent article number
         *     'ARTICLECOMPONENT_NUMBER' => child article numner
         *     'ARTICLECOMPONENT_QUANTITY' => quantity of the child for the group
         * )
         */
        foreach ($components as $component) {
            $child = $this->findOneBy(['[article.number] = ' . $component['ARTICLECOMPONENT_NUMBER']]);

            $article['ARTICLE_CHILDREN'][] = $child;
        }
    }



    private function addPrices(array &$article)
    {
        if ($article['ARTICLE_TYPE'] === Struct\Article::TYPE_GROUP) {
            return;
        }

        /* @var $priceResource Price */
        $priceResource = Shopware()->Container()->get('ost_erp_api.api.resources.price');

        $prices = $priceResource->findBy([
            "[price.number] = '" . $article['ARTICLE_NUMBER'] . "'"
        ]);

        $article['ARTICLE_PRICES'] = $prices;
    }



    private function addStock(array &$article)
    {
        if ($article['ARTICLE_TYPE'] === Struct\Article::TYPE_GROUP) {
            return;
        }

        /* @var $stockResource Stock */
        $stockResource = Shopware()->Container()->get('ost_erp_api.api.resources.stock');

        $stock = $stockResource->findBy([
            "[stock.number] = '" . $article['ARTICLE_NUMBER'] . "'"
        ]);

        $article['ARTICLE_STOCK'] = $stock;
    }



    private function addReservedStock(array &$article)
    {
        if ($article['ARTICLE_TYPE'] === Struct\Article::TYPE_GROUP) {
            return;
        }

        /* @var $reservedStockResource Stock */
        $reservedStockResource = Shopware()->Container()->get('ost_erp_api.api.resources.reserved_stock');

        $reservedStock = $reservedStockResource->findBy([
            "[reservedstock.number] = '" . $article['ARTICLE_NUMBER'] . "'"
        ]);


        $article['ARTICLE_RESERVED_STOCK'] = $reservedStock;
    }



    private function addLabel(array &$article)
    {
        /* @var $labelResource Label */
        $labelResource = Shopware()->Container()->get('ost_erp_api.api.resources.label');

        $label = $labelResource->findOneBy([
            "[label.key] = '" . $article['ARTICLE_LABEL'] . "'"
        ]);

        $article['ARTICLE_LABEL'] = $label;
    }



    private function addCompany(array &$article)
    {
        /* @var $companyResource Company */
        $companyResource = Shopware()->Container()->get('ost_erp_api.api.resources.company');

        $company = $companyResource->findOneBy([
            "[company.key] = '" . $article['ARTICLE_COMPANY'] . "'"
        ]);


        $article['ARTICLE_COMPANY'] = $company;
    }



    private function addAvailableStock(array &$article)
    {
        /* @var $processor ProcessorInterface */
        $processor = Shopware()->Container()->get('ost_erp_api.api.processors.article.available_stock');

        $processor->process($article);
    }



    private function addExhibits(array &$article)
    {
        /* @var $processor ProcessorInterface */
        $processor = Shopware()->Container()->get('ost_erp_api.api.processors.article.exhibits');

        $processor->process($article);
    }
}
