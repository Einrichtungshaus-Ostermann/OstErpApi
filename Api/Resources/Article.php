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
use OstErpApi\Struct;

class Article extends Resource
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'Article';

    /**
     * {@inheritdoc}
     */
    public function findBy(array $params = []): array
    {
        /** @var Gateway $gateway */
        $gateway = $this->getGateway( "article" );

        // get the articles as array
        $articlesArr = $gateway->findBy($params);

        // loop every article
        foreach ($articlesArr as $key => $article) {

            // process everything
            $this->addChildren($article);
            $this->addStock($article);
            $this->addReservedStock($article);
            $this->addCompany($article);
            $this->addLabel($article);
            $this->addPrices($article);
            $this->addAvailableStock($article);
            $this->addExhibits($article);

            // set the edited article
            $articlesArr[$key] = $article;
        }

        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.article');

        // hydrate the articles
        $data = $hydrator->hydrate($articlesArr);

        // process
        $this->addCalculatedPrices($data);

        // return final articles
        return $data;
    }

    /**
     * ...
     *
     * @param array $articles
     */
    private function addCalculatedPrices(array &$articles)
    {
        /* @var $processor ProcessorInterface */
        $processor = Shopware()->Container()->get('ost_erp_api.api.processors.article.calculated_prices');

        // process every article
        foreach ($articles as $article) {
            $processor->process($article);
        }
    }

    /**
     * ...
     *
     * @param array $article
     */
    private function addChildren(array &$article)
    {
        // ignore flat articles
        if ($article['ARTICLE_TYPE'] !== Struct\Article::TYPE_GROUP) {
            return;
        }

        // get adapter
        $adapter = $this->getAdapter();

        /** @var Gateway $articleComponentGateway */
        $articleComponentGateway = Shopware()->Container()->get('ost_erp_api.api.gateway.' . strtolower($adapter) . '.article_component');

        // find every child
        $components = $articleComponentGateway->findBy([
            '[articlecomponent.number] = ' . $article['ARTICLE_NUMBER']
        ]);

        // set empty child array
        $article['ARTICLE_CHILDREN'] = [];

        // loop every component
        foreach ($components as $component) {

            // find full child as struct
            $child = $this->findOneBy(['[article.number] = ' . $component['ARTICLECOMPONENT_NUMBER']]);

            // add to children
            $article['ARTICLE_CHILDREN'][] = $child;
        }
    }



    /**
     * ...
     *
     * @param array $article
     */
    private function addPrices(array &$article)
    {
        // ignore group articles
        if ($article['ARTICLE_TYPE'] === Struct\Article::TYPE_GROUP) {
            return;
        }

        /* @var $priceResource Price */
        $priceResource = Shopware()->Container()->get('ost_erp_api.api.resources.price');

        // get every price
        $prices = $priceResource->findBy([
            "[price.number] = '" . $article['ARTICLE_NUMBER'] . "'"
        ]);

        // and add them
        $article['ARTICLE_PRICES'] = $prices;
    }

    /**
     * ...
     *
     * @param array $article
     */
    private function addStock(array &$article)
    {
        // ignore group articles
        if ($article['ARTICLE_TYPE'] === Struct\Article::TYPE_GROUP) {
            return;
        }

        /* @var $stockResource Stock */
        $stockResource = Shopware()->Container()->get('ost_erp_api.api.resources.stock');

        // get every stock
        $stock = $stockResource->findBy([
            "[stock.number] = '" . $article['ARTICLE_NUMBER'] . "'"
        ]);

        // add them
        $article['ARTICLE_STOCK'] = $stock;
    }

    /**
     * ...
     *
     * @param array $article
     */
    private function addReservedStock(array &$article)
    {
        // ignore group articles
        if ($article['ARTICLE_TYPE'] === Struct\Article::TYPE_GROUP) {
            return;
        }

        /* @var $reservedStockResource Stock */
        $reservedStockResource = Shopware()->Container()->get('ost_erp_api.api.resources.reserved_stock');

        // get every reserved stock
        $reservedStock = $reservedStockResource->findBy([
            "[reservedstock.number] = '" . $article['ARTICLE_NUMBER'] . "'"
        ]);

        // add them
        $article['ARTICLE_RESERVED_STOCK'] = $reservedStock;
    }

    /**
     * ...
     *
     * @param array $article
     */
    private function addLabel(array &$article)
    {
        /* @var $labelResource Label */
        $labelResource = Shopware()->Container()->get('ost_erp_api.api.resources.label');

        // get the label
        $label = $labelResource->findOneBy([
            "[label.key] = '" . $article['ARTICLE_LABEL'] . "'"
        ]);

        // set it
        $article['ARTICLE_LABEL'] = $label;
    }

    /**
     * ...
     *
     * @param array $article
     */
    private function addCompany(array &$article)
    {
        /* @var $companyResource Company */
        $companyResource = Shopware()->Container()->get('ost_erp_api.api.resources.company');

        // get the company
        $company = $companyResource->findOneBy([
            "[company.key] = '" . $article['ARTICLE_COMPANY'] . "'"
        ]);

        // set it
        $article['ARTICLE_COMPANY'] = $company;
    }

    /**
     * ...
     *
     * @param array $article
     */
    private function addAvailableStock(array &$article)
    {
        /* @var $processor ProcessorInterface */
        $processor = Shopware()->Container()->get('ost_erp_api.api.processors.article.available_stock');

        // process available stock
        $processor->process($article);
    }

    /**
     * ...
     *
     * @param array $article
     */
    private function addExhibits(array &$article)
    {
        /* @var $processor ProcessorInterface */
        $processor = Shopware()->Container()->get('ost_erp_api.api.processors.article.exhibits');

        // process exhibits
        $processor->process($article);
    }
}
