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

class Price extends Struct
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
     * @var \DateTime
     */
    protected $startDate;

    /**
     * ...
     *
     * @var \DateTime
     */
    protected $endDate;

    /**
     * ...
     *
     * @var float
     */
    protected $pickupPrice;

    /**
     * ...
     *
     * @var float
     */
    protected $deliveryPrice;

    /**
     * ...
     *
     * @var float
     */
    protected $fullservicePrice;

    /**
     * ...
     *
     * @var float
     */
    protected $pickupPseudoPrice;

    /**
     * ...
     *
     * @var float
     */
    protected $deliveryPseudoPrice;

    /**
     * ...
     *
     * @var float
     */
    protected $fullservicePseudoPrice;

    /**
     * The company.
     *
     * @var Company
     */
    protected $company;

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
     * @return \DateTime
     */
    public function getStartDate(): \DateTime
    {
        return $this->startDate;
    }

    /**
     * Setter method for the property.
     *
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * Getter method for the property.
     *
     * @return \DateTime
     */
    public function getEndDate(): \DateTime
    {
        return $this->endDate;
    }

    /**
     * Setter method for the property.
     *
     * @param \DateTime $endDate
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * Getter method for the property.
     *
     * @return float
     */
    public function getPickupPrice(): float
    {
        return $this->pickupPrice;
    }

    /**
     * Setter method for the property.
     *
     * @param float $pickupPrice
     */
    public function setPickupPrice(float $pickupPrice)
    {
        $this->pickupPrice = $pickupPrice;
    }

    /**
     * Getter method for the property.
     *
     * @return float
     */
    public function getDeliveryPrice(): float
    {
        return $this->deliveryPrice;
    }

    /**
     * Setter method for the property.
     *
     * @param float $deliveryPrice
     */
    public function setDeliveryPrice(float $deliveryPrice)
    {
        $this->deliveryPrice = $deliveryPrice;
    }

    /**
     * Getter method for the property.
     *
     * @return float
     */
    public function getFullservicePrice(): float
    {
        return $this->fullservicePrice;
    }

    /**
     * Setter method for the property.
     *
     * @param float $fullservicePrice
     */
    public function setFullservicePrice(float $fullservicePrice)
    {
        $this->fullservicePrice = $fullservicePrice;
    }

    /**
     * Getter method for the property.
     *
     * @return float
     */
    public function getPickupPseudoPrice(): float
    {
        return $this->pickupPseudoPrice;
    }

    /**
     * Setter method for the property.
     *
     * @param float $pickupPseudoPrice
     */
    public function setPickupPseudoPrice(float $pickupPseudoPrice)
    {
        $this->pickupPseudoPrice = $pickupPseudoPrice;
    }

    /**
     * Getter method for the property.
     *
     * @return float
     */
    public function getDeliveryPseudoPrice(): float
    {
        return $this->deliveryPseudoPrice;
    }

    /**
     * Setter method for the property.
     *
     * @param float $deliveryPseudoPrice
     */
    public function setDeliveryPseudoPrice(float $deliveryPseudoPrice)
    {
        $this->deliveryPseudoPrice = $deliveryPseudoPrice;
    }

    /**
     * Getter method for the property.
     *
     * @return float
     */
    public function getFullservicePseudoPrice(): float
    {
        return $this->fullservicePseudoPrice;
    }

    /**
     * Setter method for the property.
     *
     * @param float $fullservicePseudoPrice
     */
    public function setFullservicePseudoPrice(float $fullservicePseudoPrice)
    {
        $this->fullservicePseudoPrice = $fullservicePseudoPrice;
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
}
