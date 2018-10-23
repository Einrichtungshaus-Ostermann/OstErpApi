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

use OstErpApi\Api\Gateway\Gateway;
use OstErpApi\Api\Hydrator\Hydrator;

class Company extends Resource
{
    protected $name = 'Company';



    protected $data = array(
        array(
            'COMPANY_KEY' => 1,
            'COMPANY_NAME' => "Ostermann"
        ),
        array(
            'COMPANY_KEY' => 3,
            'COMPANY_NAME' => "Trends"
        )
    );



    // [company.key] = 1
    // [company.name] = Ostermann
    public function findBy(array $params = [], array $options = []): array
    {

        $data = $this->findInArray(
            $this->data,
            $params
        );


        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.company');

        return $hydrator->hydrate($data);


    }
}
