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

class AvailableStock extends Struct
{

    /**
     * A unique article number.
     *
     * @var string
     */
    protected $number;



    /**
     * The actual available quantity within the given store.
     *
     * Example:
     * - 1
     * - 100
     *
     * @var int
     */
    protected $quantity;



    /**
     * The available stock in available in this store.
     *
     * @var Store
     */
    protected $store;



    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }



    /**
     * Setter method for the property.
     *
     * @param string $number
     *
     * @return void
     */
    public function setNumber(string $number)
    {
        $this->number = $number;
    }



    /**
     * Getter method for the property.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }



    /**
     * Setter method for the property.
     *
     * @param int $quantity
     *
     * @return void
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }



    /**
     * Getter method for the property.
     *
     * @return Store
     */
    public function getStore()
    {
        return $this->store;
    }



    /**
     * Setter method for the property.
     *
     * @param Store $store
     *
     * @return void
     */
    public function setStore(Store $store)
    {
        $this->store = $store;
    }



}
