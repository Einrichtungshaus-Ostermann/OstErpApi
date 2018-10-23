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

namespace OstErpApi\Api\Gateway\Iwm;

use OstErpApi\Services\ConfigurationService;
use OstErpApi\Api\Gateway\Gateway as GatewayParent;

abstract class Gateway extends GatewayParent
{
    /**
     * @var \PDO
     */
    protected static $db;



    /**
     * @var ConfigurationService
     */
    private $configurationService;



    /**
     * Gateway constructor.
     *
     * @param ConfigurationService $configurationService
     */
    public function __construct(ConfigurationService $configurationService)
    {

        parent::__construct($configurationService);


        if (static::$db === null) {
            try {
                static::$db = new \PDO(
                    'odbc:' . $configurationService->get('credentialsServer'),
                    $configurationService->get('credentialsLogin'),
                    $configurationService->get('credentialsPassword'));
            } catch (\Exception $exception) {
                die('establishing connection failed:' . $exception->getMessage());
            }
        }


    }
}
