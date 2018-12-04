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
     * @var string
     */
    protected $table;

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
                    $configuration['credentialsPassword']
                );
            } catch (\Exception $exception) {
                die('establishing connection failed:' . $exception->getMessage());
            }
        }
    }



    /**
     * ...
     *
     * @param array $parameters
     *
     * @throws \Exception
     *
     * @return array
     */
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

        if ( $res === false )
            throw new \Exception( "invalid query: " . $query );

        return $res->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * ...
     *
     * @return string
     */
    protected function getQuery(): string
    {
        $columns = array();

        $class = str_replace( __NAMESPACE__ . "\\", "", get_class( $this ) );

        $dir = __DIR__ . "/Mapping/" . $class . "/";

        foreach ( glob( $dir . "*.php" ) as $columnClass )
        {
            $column = str_replace( array( $dir, ".php" ), "", $columnClass );
            array_push( $columns, "[" . strtolower( $class ) . "." . strtolower( $column ) . "]" );
        }

        $query = "
            SELECT
            " . implode( ",", $columns ) . "
            FROM " . $this->table . "
        ";

        return $query;
    }

    /**
     * ...
     *
     * @param array $params
     */
    protected function addParams(array $params)
    {
    }
}
