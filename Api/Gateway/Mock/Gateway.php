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

use OstErpApi\Api\Gateway\Gateway as GatewayParent;

abstract class Gateway extends GatewayParent
{
    /**
     * Some test data.
     *
     * @var array
     */
    protected $data = [];

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

        // and return the results
        return $data;
    }
}
