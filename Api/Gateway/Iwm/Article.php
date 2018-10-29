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

class Article extends Gateway
{
    protected function getQuery()
    {
        $query = '
            SELECT 
                [article.company],
                [article.hwg],
                [article.uwg],
                [article.number],
                [article.name],
                [article.weight],
                [article.width],
                [article.height],
                [article.depth],
                [article.disposition],
                [article.type],
                [article.label]
            FROM IWMV2R1DTA.ARTS00
            
        ';

        return $query;
    }
}
