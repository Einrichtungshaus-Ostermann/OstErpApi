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
    public function hydrate(array $data): array
    {
        $arr = [];

        foreach ($data as $company) {
            $companyStruct = new Struct\Company();

            $companyStruct->setKey((int)$company['COMPANY_KEY']);
            $companyStruct->setName($company['COMPANY_NAME']);


            $arr[] = $companyStruct;
        }

        return $arr;
    }
}
