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

class ArticleComponent extends Gateway
{
    /**
     * {@inheritdoc}
     */
    protected function getQuery():string
    {
        $query = '
            SELECT 
                [articlecomponent.number],
                [articlecomponent.child],
                [articlecomponent.quantity]
            FROM IWMV2R1DTA.VSET00
        ';

        return $query;
    }
}
