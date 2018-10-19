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

class Store extends Gateway
{

    public function findBy(array $parameters = []): array
    {
        $stores = \OstErpApi\Api\Gateway\Iwm\Store::STORES;

        if (empty($parameters)) {
            return $stores;
        }

        foreach ($stores as $store) {
            if (in_array(explode('[store.key] = ', $parameters[1])[0], $store['LOCATION_NUMBERS'], true)) {
                return $store;
            }
        }

        return $stores;
    }
}
