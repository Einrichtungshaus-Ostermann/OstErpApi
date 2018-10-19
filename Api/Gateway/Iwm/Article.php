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

class Article extends IwmGateway
{
    public function findBy(array $parameters = []): array
    {
        $query = '
            SELECT 
                [article.company],
                [article.number],
                [article.name],
                0 AS article_weight
            FROM IWMV2R1DTA.ARTS00
            
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

        return $res->fetchAll(\PDO::FETCH_ASSOC);
    }
}
