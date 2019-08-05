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
use OstErpApi\Api\Gateway\Iwm\Mapping\MappingInterface;

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
        // return default with parameters
        return $this->queryBy(
            $parameters,
            $this->getQuery()
        );
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
    public function searchBy(array $parameters = []): array
    {
        // return default with parameters
        return $this->queryBy(
            $parameters,
            $this->getSearchQuery(),
            50
        );
    }

    /**
     * ...
     *
     * @param array $parameters
     * @param string $query
     * @param integer $limit
     *
     * @throws \Exception
     *
     * @return array
     */
    private function queryBy(array $parameters = [], $query, $limit = null): array
    {
        // add parameters
        $this->addParams($parameters);

        /* @var $parser Mapping\Parser */
        $parser = Shopware()->Container()->get('ost_erp_api.api.gateway.iwm.mapping.parser');

        // parse the query
        $query = $parser->parseSelect($query);

        // do we have any parameters?
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

        // do we have a limit?!
        if ((integer) $limit > 0) {
            // add it to the query
            $query .= ' FETCH FIRST ' . (integer) $limit . ' ROWS ONLY ';
        }

        // execute the query
        $res = static::$db->query($query);

        // invalid?!
        if ( $res === false ) {
            // throw exceptipn
            throw new \Exception( "invalid query: " . $query );
        }

        // get them all
        $arr = $res->fetchAll(\PDO::FETCH_ASSOC);

        // and return the casted cata
        return $this->cast($arr);
    }

    /**
     * ...
     *
     * @return mixed
     */
    protected function cast($data)
    {
        // invalid calls
        if ( !is_array( $data ) ) {
            // return default data
            return $data;
        }

        // loop every element
        foreach ( $data as $i => $aktu ) {
            // loop every key and value
            foreach ( $aktu as $key => $value ) {
                // split table and column
                $split = explode( "_", $key );

                // create object name
                /* @var $mapping MappingInterface */
                $mapping = __NAMESPACE__ . '\\Mapping\\' . ucwords($split[0]) . '\\' . ucwords($split[1]);

                // cast it
                $value = $mapping::cast($value);

                // reset it
                $aktu[$key] = $value;
            }

            // set the casted value
            $data[$i] = $aktu;
        }

        // return the casted data
        return $data;
    }

    /**
     * ...
     *
     * @return string
     */
    protected function getQuery(): string
    {
        // every column read from the directory
        $columns = array();

        // get current class name
        $class = str_replace( __NAMESPACE__ . "\\", "", get_class( $this ) );

        // get the directory
        $dir = __DIR__ . "/Mapping/" . $class . "/";

        // read every available column class
        foreach ( glob( $dir . "*.php" ) as $columnClass ) {
            // add the column
            $column = str_replace( array( $dir, ".php" ), "", $columnClass );
            array_push( $columns, "[" . strtolower( $class ) . "." . strtolower( $column ) . "]" );
        }

        // create the query
        $query = "
            SELECT
            " . implode( ",", $columns ) . "
            FROM " . $this->table . "
        ";

        // return it
        return $query;
    }

    /**
     * ...
     *
     * @return string
     */
    protected function getSearchQuery(): string
    {
        // default query by default
        return $this->getQuery();
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
