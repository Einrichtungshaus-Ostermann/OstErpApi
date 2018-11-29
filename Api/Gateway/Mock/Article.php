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

class Article extends Gateway
{
    /**
     * Some test data.
     *
     * @var array
     */
    protected $data = [
        [
            'ARTICLE_COMPANY'     => '1',
            'ARTICLE_HWG'         => '92',
            'ARTICLE_UWG'         => '95',
            'ARTICLE_NUMBER'      => '874355',
            'ARTICLE_NAME'        => 'Decke JOOP! New VF (BL 150x200cm)',
            'ARTICLE_WEIGHT'      => '200',
            'ARTICLE_DISPOSITION' => 'L',
            'ARTICLE_TYPE'        => 'D',
        ],
        [
            'ARTICLE_COMPANY'     => '1',
            'ARTICLE_HWG'         => '92',
            'ARTICLE_UWG'         => '95',
            'ARTICLE_NUMBER'      => '811243',
            'ARTICLE_NAME'        => 'Teppich JOOP! Touch (BL 200x300cm)',
            'ARTICLE_WEIGHT'      => '1500',
            'ARTICLE_DISPOSITION' => 'L',
            'ARTICLE_TYPE'        => 'E',
        ]
    ];


    /**
     * {@inheritdoc}
     */
    public function findBy(array $params = []): array
    {
        // find in our pre-defined array
        $data = $this->findInArray(
            $this->data,
            $params
        );

        // force at least one valid element
        if (count($data) === 0) {
            $data = [$this->data[1]];
        }

        // and return the results
        return $data;
    }
}
