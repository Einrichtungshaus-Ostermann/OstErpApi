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

use OstErpApi\Services\ConfigurationService;
use OstErpApi\Api\ArrayTrait;



abstract class Gateway
{



    use ArrayTrait;



    /**
     * @var ConfigurationService
     */
    protected $configurationService;



    /**
     * Gateway constructor.
     *
     * @param ConfigurationService $configurationService
     */
    public function __construct(ConfigurationService $configurationService)
    {
        $this->configurationService = $configurationService;
    }



    abstract public function findBy(array $parameters = []): array;
}
