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

            $articleStruct->setCompany((int) $article['ARTICLE_COMPANY']);
            $articleStruct->setNumber((string) $article['ARTICLE_NUMBER']);
            $articleStruct->setName((string) $article['ARTICLE_NAME']);
            $articleStruct->setWeight((float) $article['ARTICLE_WEIGHT']);

            $articleStruct->setStock($article['ARTICLE_STOCK'] ?? []);
            $articleStruct->setReservation($article['ARTICLE_RESERVATION'] ?? []);
            $articleStruct->setRealStock($article['ARTICLE_REAL_STOCK'] ?? []);
            $articleStruct->setExhibit($article['ARTICLE_EXHIBIT'] ?? []);

            $arr[] = $articleStruct;
        }

        return $arr;
    }
}
