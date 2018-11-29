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

namespace OstErpApi\Api\Hydrator;

use OstErpApi\Struct;

class Company extends Hydrator
{
    /**
     * {@inheritdoc}
     */
    public function hydrate(array $data): array
    {
        // hydrated array
        $arr = [];

        // loop every company
        foreach ($data as $company) {

            // create struct
            $companyStruct = new Struct\Company();

            // flat attributes
            $companyStruct->setKey((int) $company['COMPANY_KEY']);
            $companyStruct->setName($company['COMPANY_NAME']);

            // add hydrated struct
            $arr[] = $companyStruct;
        }

        // return them
        return $arr;
    }
}
