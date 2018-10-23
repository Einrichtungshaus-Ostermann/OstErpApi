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

use OstErpApi\Api\Gateway\Iwm\Mapping\Parser;

class ReservedStock extends Gateway
{
    public function findBy(array $parameters = []): array
    {
        $parameters[] = "VRRSTT = 1 AND VRSTAT = 'A'";

        $query = '
            SELECT 
            [reservedstock.company],
            [reservedstock.number],
            [reservedstock.location],
            [reservedstock.quantity]
            FROM IWMV2R1DTA.VRES00
        ';

        $parser = new Parser();
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
