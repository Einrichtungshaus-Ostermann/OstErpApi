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

class Article extends Struct
{
    /**
     * The Company number behind the Article
     *
     * @var int
     */
    protected $company;



    /**
     * A unique article number.
     *
     * @var string
     */
    protected $number;



    /**
     * A readable article name.
     *
     * @var string
     */
    protected $name;



    /**
     * The weight.
     *
     * @var float
     */
    protected $weight;



    /**
     * Every available stock information for this article.
     *
     * @var Stock[]
     */
    protected $stock = [];



    /**
     * Every available reservation information for this article.
     *
     * @var Reservation[]
     */
    protected $reservation = [];



    /**
     * Every stock is clean and the actual available stock.
     *
     * @var Stock[]
     */
    protected $realStock = [];



    /**
     * In which Stores is the Article
     *
     * @var Store[]
     */
    protected $exhibit = [];



    /**
     * @return int
     */
    public function getCompany(): int
    {
        return $this->company;
    }



    /**
     * @param int $company
     */
    public function setCompany(int $company)
    {
        $this->company = $company;
    }



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
     */
    public function setNumber(string $number)
    {
        $this->number = $number;
    }



    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getName()
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
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }



    /**
     * Setter method for the property.
     *
     * @param float $weight
     */
    public function setWeight(float $weight)
    {
        $this->weight = $weight;
    }



    /**
     * Getter method for the property.
     *
     * @return Stock[]
     */
    public function getStock()
    {
        return $this->stock;
    }



    /**
     * Setter method for the property.
     *
     * @param Stock[] $stock
     */
    public function setStock(array $stock)
    {
        $this->stock = $stock;
    }



    /**
     * Setter method for the property.
     *
     * @param Stock $stock
     */
    public function addStock(Stock $stock)
    {
        $this->stock[] = $stock;
    }

    /**
     * Getter method for the property.
     *
     * @return Reservation[]
     */
    public function getReservation()
    {
        return $this->reservation;
    }



    /**
     * Setter method for the property.
     *
     * @param Reservation[] $reservation
     */
    public function setReservation(array $reservation)
    {
        $this->reservation = $reservation;
    }



    /**
     * Setter method for the property.
     *
     * @param Reservation $reservation
     */
    public function addReservation(Reservation $reservation)
    {
        $this->reservation[] = $reservation;
    }

    /**
     * Getter method for the property.
     *
     * @return Stock[]
     */
    public function getRealStock()
    {
        return $this->realStock;
    }



    /**
     * Setter method for the property.
     *
     * @param Stock[] $stock
     */
    public function setRealStock(array $stock)
    {
        $this->realStock = $stock;
    }



    /**
     * Setter method for the property.
     *
     * @param Stock $stock
     */
    public function addRealStock(Stock $stock)
    {
        $this->realStock[] = $stock;
    }



    /**
     * @return Store[]
     */
    public function getExhibit(): array
    {
        return $this->exhibit;
    }



    /**
     * @param Store[] $exhibit
     */
    public function setExhibit(array $exhibit)
    {
        $this->exhibit = $exhibit;
    }

    /**
     * @param Store $store
     */
    public function addExhibit(Store $store)
    {
        $this->exhibit[] = $store;
    }


}
