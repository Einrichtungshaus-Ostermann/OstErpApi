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

class Store extends Struct
{
    const TYPE_PHYSICAL = 1;
    const TYPE_ONLINE = 2;

    /**
     * ...
     *
     * @var string
     */
    protected $key;

    /**
     * ...
     *
     * @var string
     */
    protected $name;

    /**
     * ...
     *
     * @var string
     */
    protected $city;

    /**
     * ...
     *
     * @var Company
     */
    protected $company;

    /**
     * ...
     *
     * @var int
     */
    protected $type;

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * Setter method for the property.
     *
     * @param string $key
     */
    public function setKey(string $key)
    {
        $this->key = $key;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Setter method for the property.
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Setter method for the property.
     *
     * @param string $city
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }

    /**
     * Getter method for the property.
     *
     * @return Company
     */
    public function getCompany(): Company
    {
        return $this->company;
    }

    /**
     * Setter method for the property.
     *
     * @param Company $company
     */
    public function setCompany(Company $company)
    {
        $this->company = $company;
    }

    /**
     * Getter method for the property.
     *
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * Setter method for the property.
     *
     * @param int $type
     */
    public function setType(int $type)
    {
        $this->type = $type;
    }
}
