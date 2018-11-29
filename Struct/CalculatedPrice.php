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
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Setter method for the property.
     *
     * @param string $number
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
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * Setter method for the property.
     *
     * @param float $price
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
    public function getPseudoPrice(): float
    {
        return $this->pseudoPrice;
    }

    /**
     * Setter method for the property.
     *
     * @param float $pseudoPrice
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
    public function getShippingCosts(): float
    {
        return $this->shippingCosts;
    }

    /**
     * Setter method for the property.
     *
     * @param float $shippingCosts
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
    public function getAssemblySurcharge(): float
    {
        return $this->assemblySurcharge;
    }

    /**
     * Setter method for the property.
     *
     * @param float $assemblySurcharge
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
}
