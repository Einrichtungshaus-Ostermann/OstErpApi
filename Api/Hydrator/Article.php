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
    public function hydrate(array $data): array
    {
        $arr = [];

        foreach ($data as $article)
        {


            $articleStruct = ( $article['ARTICLE_TYPE'] == Struct\Article::TYPE_GROUP )
                ? new Struct\ArticleGroup()
                : new Struct\Article();







            $articleStruct->setNumber((string) $article['ARTICLE_NUMBER']);
            $articleStruct->setName((string) $article['ARTICLE_NAME']);
            $articleStruct->setWeight((float) $article['ARTICLE_WEIGHT']);

            $articleStruct->setDisposition((string) $article['ARTICLE_DISPOSITION']);
            $articleStruct->setType((string) $article['ARTICLE_TYPE']);

            $articleStruct->setStock($article['ARTICLE_STOCK'] ?? []);
            $articleStruct->setReservedStock($article['ARTICLE_RESERVED_STOCK'] ?? []);
            $articleStruct->setAvailableStock($article['ARTICLE_AVAILABLE_STOCK'] ?? []);
            $articleStruct->setExhibits($article['ARTICLE_EXHIBITS'] ?? []);

            $articleStruct->setCompany($article['ARTICLE_COMPANY']);



            if ( $articleStruct instanceof Struct\ArticleGroup )
                $articleStruct->setArticles( (array) $article['ARTICLE_CHILDREN'] );




            $arr[] = $articleStruct;
        }

        return $arr;
    }
}
