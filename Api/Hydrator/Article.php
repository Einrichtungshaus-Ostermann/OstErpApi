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
    /**
     * {@inheritdoc}
     */
    public function hydrate(array $data): array
    {
        // hydrated array
        $arr = [];

        // loop every article
        foreach ($data as $article) {

            // component or flat article?
            $articleStruct = ($article['ARTICLE_TYPE'] === Struct\Article::TYPE_GROUP) ? new Struct\ArticleGroup() : new Struct\Article();

            // flat attributes
            $articleStruct->setHwg((int) $article['ARTICLE_HWG']);
            $articleStruct->setUwg((int) $article['ARTICLE_UWG']);
            $articleStruct->setNumber((string) $article['ARTICLE_NUMBER']);
            $articleStruct->setName((string) $article['ARTICLE_NAME']);
            $articleStruct->setWeight((float) $article['ARTICLE_WEIGHT']);
            $articleStruct->setWidth((float) $article['ARTICLE_WIDTH']);
            $articleStruct->setHeight((float) $article['ARTICLE_HEIGHT']);
            $articleStruct->setDepth((float) $article['ARTICLE_DEPTH']);
            $articleStruct->setDisposition((string) $article['ARTICLE_DISPOSITION']);
            $articleStruct->setType((string) $article['ARTICLE_TYPE']);

            // structs
            $articleStruct->setStock($article['ARTICLE_STOCK'] ?? []);
            $articleStruct->setReservedStock($article['ARTICLE_RESERVED_STOCK'] ?? []);
            $articleStruct->setAvailableStock($article['ARTICLE_AVAILABLE_STOCK'] ?? []);
            $articleStruct->setExhibits($article['ARTICLE_EXHIBITS'] ?? []);
            $articleStruct->setPrices($article['ARTICLE_PRICES'] ?? []);
            $articleStruct->setCompany($article['ARTICLE_COMPANY']);

            // do we have a label?
            if ($article['ARTICLE_LABEL'] instanceof Struct\Label) {
                $articleStruct->setLabel($article['ARTICLE_LABEL']);
            }

            // article children for group
            if ($articleStruct instanceof Struct\ArticleGroup) {
                $articleStruct->setArticles((array) $article['ARTICLE_CHILDREN']);
            }

            // add hydrated struct
            $arr[] = $articleStruct;
        }

        // return them
        return $arr;
    }
}
