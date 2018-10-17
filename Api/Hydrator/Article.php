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

            $articleStruct->setNumber((string)$article['article_number']);
            $articleStruct->setName((string)$article['article_name']);
            $articleStruct->setWeight((float)$article['article_weight']);


            foreach ($article['article_stock'] as $stock) {
                $stockStruct = new Struct\Article\Stock();

                $stockStruct->setLocation($stock['stock_location']);
                $stockStruct->setStock($stock['stock_stock']);

                $articleStruct->addStock($stockStruct);
            }

            $arr[] = $articleStruct;
        }

        return $arr;
    }
}
