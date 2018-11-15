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

namespace OstErpApi\Struct;

class Location extends Struct
{
    /**
     * The internal ERP key for the location.
     *
     * Example
     * - 100
     * - 200
     *
     * @var string
     */
    protected $key;


    /**
     * The type of the location
     *
     * Example
     * - A
     * - I
     *
     * @var string
     */
    protected $type;




    /**
     * ...
     *
     * @var Company
     */
    protected $company;



    /**
     * The internal ERP key for the Store.
     *
     * @var Store
     */
    protected $store;



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
     * @return Store
     */
    public function getStore(): Store
    {
        return $this->store;
    }



    /**
     * Setter method for the property.
     *
     * @param Store $store
     */
    public function setStore(Store $store)
    {
        $this->store = $store;
    }



    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }



    /**
     * Setter method for the property.
     *
     * @param string $type
     *
     * @return void
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }



}
