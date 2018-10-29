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

namespace OstErpApi\Api\Gateway\Mock;

use OstErpApi\Api\Gateway\Gateway;

class Price extends Gateway
{




    private $data = [
        [
            'ARTICLE_NUMBER' => "874355",
            'PRICE_COMPANY'      => "1",
            'PRICE_DELIVERYPRICE' => "219.99",
            'PRICE_DELIVERYPSEUDOPRICE' => "0",
            'PRICE_STARTDATE' => "2018-1-1 00:00:01",
            'PRICE_ENDDATE' => "2018-12-31 23:59:59",
            'PRICE_FULLSERVICEPRICE' => "239.99",
            'PRICE_FULLSERVICEPSEUDOPRICE' => "0",
            'PRICE_PICKUPPRICE' => "199.99",
            'PRICE_PICKUPPSEUDOPRICE' => "0",
            'PRICE_STORE' => "00"
        ],


        [
            'ARTICLE_NUMBER' => "874355",
            'PRICE_COMPANY'      => "1",
            'PRICE_DELIVERYPRICE' => "299.99",
            'PRICE_DELIVERYPSEUDOPRICE' => "0",
            'PRICE_STARTDATE' => "2018-1-1 00:00:01",
            'PRICE_ENDDATE' => "2018-12-31 23:59:59",
            'PRICE_FULLSERVICEPRICE' => "279.99",
            'PRICE_FULLSERVICEPSEUDOPRICE' => "0",
            'PRICE_PICKUPPRICE' => "219.99",
            'PRICE_PICKUPPSEUDOPRICE' => "0",
            'PRICE_STORE' => "01"
        ],






    ];






    public function findBy(array $params = []): array
    {
        $data = $this->findInArray(
            $this->data,
            $params
        );

        return $data;
    }
}
