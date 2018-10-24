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

class Article extends Gateway
{




    private $data = [
        [
            'ARTICLE_COMPANY'      => "1",
            'ARTICLE_HWG'      => "92",
            'ARTICLE_UWG'      => "95",
            'ARTICLE_NUMBER'      => "874355",
            'ARTICLE_NAME'      => "Decke JOOP! New VF (BL 150x200cm)",
            'ARTICLE_WEIGHT'      => "200",
            'ARTICLE_DISPOSITION'      => "L",
            'ARTICLE_TYPE'      => "D",
        ],

        [
            'ARTICLE_COMPANY'      => "1",
            'ARTICLE_HWG'      => "92",
            'ARTICLE_UWG'      => "95",
            'ARTICLE_NUMBER'      => "811243",
            'ARTICLE_NAME'      => "Teppich JOOP! Touch (BL 200x300cm)",
            'ARTICLE_WEIGHT'      => "1500",
            'ARTICLE_DISPOSITION'      => "L",
            'ARTICLE_TYPE'      => "E",
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
