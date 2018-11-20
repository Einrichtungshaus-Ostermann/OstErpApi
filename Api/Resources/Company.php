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

namespace OstErpApi\Api\Resources;

use OstErpApi\Api\Hydrator\Hydrator;

class Company extends Resource
{
    /**
     * {@inheritdoc}
     */
    protected $name = 'Company';

    /**
     * Fixed static companies.
     *
     * @var array
     */
    protected $data = [
        [
            'COMPANY_KEY'  => '1',
            'COMPANY_NAME' => 'Ostermann'
        ],
        [
            'COMPANY_KEY'  => '3',
            'COMPANY_NAME' => 'Trends'
        ]
    ];

    /**
     * {@inheritdoc}
     */
    public function findBy(array $params = []): array
    {
        // just use array finder
        $data = $this->findInArray(
            $this->data,
            $params
        );

        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.company');

        // return hydrated companies
        return $hydrator->hydrate($data);
    }
}
