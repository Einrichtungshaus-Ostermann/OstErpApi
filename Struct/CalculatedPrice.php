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

class CalculatedPrice extends Struct
{

    /**
     * A unique article number.
     *
     * @var string
     */
    protected $number;








    /**
     * ...
     *
     * @var float
     */
    protected $price;

    /**
     * ...
     *
     * @var float
     */
    protected $pseudoPrice;

    /**
     * ...
     *
     * @var float
     */
    protected $shippingCosts;



    /**
     * ...
     *
     * @var float
     */
    protected $assemblySurcharge;







    /**
     * ...
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
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }



    /**
     * Setter method for the property.
     *
     * @param float $price
     *
     * @return void
     */
    public function setPrice(float $price)
    {
        $this->price = $price;
    }



    /**
     * Getter method for the property.
     *
     * @return float
     */
    public function getPseudoPrice()
    {
        return $this->pseudoPrice;
    }



    /**
     * Setter method for the property.
     *
     * @param float $pseudoPrice
     *
     * @return void
     */
    public function setPseudoPrice(float $pseudoPrice)
    {
        $this->pseudoPrice = $pseudoPrice;
    }



    /**
     * Getter method for the property.
     *
     * @return float
     */
    public function getShippingCosts()
    {
        return $this->shippingCosts;
    }



    /**
     * Setter method for the property.
     *
     * @param float $shippingCosts
     *
     * @return void
     */
    public function setShippingCosts(float $shippingCosts)
    {
        $this->shippingCosts = $shippingCosts;
    }



    /**
     * Getter method for the property.
     *
     * @return float
     */
    public function getAssemblySurcharge()
    {
        return $this->assemblySurcharge;
    }



    /**
     * Setter method for the property.
     *
     * @param float $assemblySurcharge
     *
     * @return void
     */
    public function setAssemblySurcharge(float $assemblySurcharge)
    {
        $this->assemblySurcharge = $assemblySurcharge;
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
