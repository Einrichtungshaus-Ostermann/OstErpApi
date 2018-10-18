<?php declare(strict_types=1);
/**
 * Einrichtungshaus Ostermann GmbH & Co. KG - ERP API
 *
 * @package   OstErpApi
 *
 * @author    Tim Windelschmidt <tim.windelschmidt@ostermann.de>
 * @copyright 2018 Einrichtungshaus Ostermann GmbH & Co. KG
 * @license   proprietary
 */

namespace OstErpApi\Struct;

class Store
{
    /**
     * A readable name for the store.
     *
     * Example:
     * - Witten
     * - Leverkusen
     *
     * @var string
     */
    protected $name;



    /**
     * The internal ERP key for the store.
     *
     * Example
     * - WITTEN
     * - LEVERKUSEN
     *
     * @var string
     */
    protected $key;



    /**
     * @var Location[]
     */
    protected $locations;



    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }



    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }



    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }



    /**
     * @param string $key
     */
    public function setKey(string $key)
    {
        $this->key = $key;
    }



    /**
     * @return Location[]
     */
    public function getLocations(): array
    {
        return $this->locations;
    }



    /**
     * @param Location[] $locations
     */
    public function setLocations(array $locations)
    {
        $this->locations = $locations;
    }

    /**
     * @param Location $location
     */
    public function addLocation(Location $location) {
        $this->locations[] = $location;
    }
}
