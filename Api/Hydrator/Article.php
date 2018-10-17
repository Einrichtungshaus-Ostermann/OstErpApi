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

        foreach ($data as $article) {

            $articleStruct = new Struct\Article();

            $articleStruct->setNumber((string)$article['ARTICLE_NUMBER']);
            $articleStruct->setName((string)$article['ARTICLE_NAME']);
            $articleStruct->setWeight((float)$article['ARTICLE_WEIGHT']);


            foreach ($article['ARTICLE_STOCK'] as $stock) {
                $stockStruct = new Struct\Article\Stock();

                $stockStruct->setLocation($stock['STOCK_LOCATION']);
                $stockStruct->setStock($stock['STOCK_STOCK']);

                $articleStruct->addStock($stockStruct);
            }

            $arr[] = $articleStruct;
        }

        return $arr;
    }
}
