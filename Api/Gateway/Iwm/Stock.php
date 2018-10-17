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

namespace OstErpApi\Api\Gateway\Iwm;

use OstErpApi\Api\Gateway\Gateway;

class Stock extends Gateway
{
    public function findBy(array $parameters = []): array
    {
        $parameters[] = 'LBDISP = \'L\' AND LBSTAT \'A\'';

        $query = '
            SELECT 
            [stock.company],
            [stock.number],
            [stock.location],
            [stock.amount],
            FROM IWMV2R1DTA.LBST00
            
        ';

        $parser = new Mapping\Parser();
        $query = $parser->parseSelect($query);

        // add braces to the where append terms and parse the string
        $parameters = array_map(
            function ($term) use ($parser) {
                return '(' . $parser->parseParameter($term) . ')';
            },
            $parameters
        );

        // add the where append
        $query .= ' WHERE ' . implode(' AND ', $parameters) . ' ';
        $res = static::$db->query($query);
        $articles = $res->fetchAll(\PDO::FETCH_ASSOC);

        foreach ($articles as &$article) {
            $article['ARTICLE_STOCK'] = [
                ['STOCK_LOCATION' => 'WITTEN', 'STOCK_STOCK' => 1]
            ];
        }

        return $articles;
    }
}