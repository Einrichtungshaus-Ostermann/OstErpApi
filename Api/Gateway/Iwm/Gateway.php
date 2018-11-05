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

use OstErpApi\Api\Gateway\Gateway as GatewayParent;

abstract class Gateway extends GatewayParent
{
    /**
     * @var \PDO
     */
    protected static $db;



    /**
     * Gateway constructor.
     *
     * @param array $configuration
     */
    public function __construct(array $configuration)
    {
        parent::__construct($configuration);


        if (static::$db === null) {
            try {
                static::$db = new \PDO(
                    'odbc:' . $configuration['credentialsServer'],
                    $configuration['credentialsLogin'],
                    $configuration['credentialsPassword']);
            } catch (\Exception $exception) {
                die('establishing connection failed:' . $exception->getMessage());
            }
        }
    }


    public function findBy(array $parameters = []): array
    {
        $query = $this->getQuery();

        $this->addParams($parameters);


        /* @var $parser Mapping\Parser */
        $parser = Shopware()->Container()->get('ost_erp_api.api.gateway.iwm.mapping.parser');

        $query = $parser->parseSelect($query);

        if (count($parameters) > 0) {

            // add braces to the where append terms and parse the string
            $parameters = array_map(
                function ($term) use ($parser) {
                    return '(' . $parser->parseParameter($term) . ')';
                },
                $parameters
            );

            // add the where append
            $query .= ' WHERE ' . implode(' AND ', $parameters) . ' ';
        }


        $res = static::$db->query($query);

        return $res->fetchAll(\PDO::FETCH_ASSOC);
    }



    protected function getQuery()
    {
        return '';
    }



    protected function addParams(array $params)
    {
    }
}
