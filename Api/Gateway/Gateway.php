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

namespace OstErpApi\Api\Gateway;

use OstErpApi\Api\ArrayTrait;

abstract class Gateway
{
    /**
     * ...
     */
    use ArrayTrait;

    /**
     * @var array
     */
    protected $configuration;

    /**
     * Gateway constructor.
     *
     * @param array $configuration
     */
    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * ...
     *
     * @param array $parameters
     *
     * @return array
     */
    abstract public function findBy(array $parameters = []): array;

    /**
     * ...
     *
     * @param array $parameters
     *
     * @return array
     */
    public function searchBy(array $parameters = []): array
    {
        // use find-by by default
        return $this->findBy($parameters);
    }
}
