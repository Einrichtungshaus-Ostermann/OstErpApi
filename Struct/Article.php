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
     * The company struct.
     *
     * @var Company
     */
    protected $company;






    const DISPOSITION_STOCK = "L";
    const DISPOSITION_EXHIBIT = "K";
    const DISPOSITION_ORDER = "B";
    const DISPOSITION_BROCHURE = "P";
    const DISPOSITION_DIRECT = "D";


    /**
     * The stock Type
     *
     * K = quantity in exhibit
     * L = default stock in the warehouse
     * B = stock which has to be ordered
     * P = stock which is reserved for a broschure or for any event
     * D = direktanlieferung
     *
     * @var string
     */
    protected $disposition;




    const TYPE_SINGLE = "E";
    const TYPE_GROUP = "D";
    const TYPE_SET = "S";



    /**
     * ...
     *
     * E -> single article
     * D -> dynamic group (with children as components)
     * S -> sets with its own stock
     *
     * @var string
     */
    protected $type;





    /**
     * Every available stock information for this article.
     *
     * @var Stock[]
     */
    protected $stock = [];



    /**
     * Every available reservation information for this article.
     *
     * @var ReservedStock[]
     */
    protected $reservedStock = [];



    /**
     * Every available stock grouped by store.
     *
     * @var AvailableStock[]
     */
    protected $availableStock = [];



    /**
     * In which Stores is the Article
     *
     * @var Store[]
     */
    protected $exhibits = [];



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
     *
     * @return void
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
     *
     * @return void
     */
    public function setWeight(float $weight)
    {
        $this->weight = $weight;
    }



    /**
     * Getter method for the property.
     *
     * @return Company
     */
    public function getCompany()
    {
        return $this->company;
    }



    /**
     * Setter method for the property.
     *
     * @param Company $company
     *
     * @return void
     */
    public function setCompany(Company $company)
    {
        $this->company = $company;
    }



    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getDisposition()
    {
        return $this->disposition;
    }



    /**
     * Setter method for the property.
     *
     * @param string $disposition
     *
     * @return void
     */
    public function setDisposition(string $disposition)
    {
        $this->disposition = $disposition;
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
     *
     * @return void
     */
    public function setStock(array $stock)
    {
        $this->stock = $stock;
    }



    /**
     * Getter method for the property.
     *
     * @return ReservedStock[]
     */
    public function getReservedStock()
    {
        return $this->reservedStock;
    }



    /**
     * Setter method for the property.
     *
     * @param ReservedStock[] $reservedStock
     *
     * @return void
     */
    public function setReservedStock(array $reservedStock)
    {
        $this->reservedStock = $reservedStock;
    }



    /**
     * Getter method for the property.
     *
     * @return AvailableStock[]
     */
    public function getAvailableStock()
    {
        return $this->availableStock;
    }



    /**
     * Setter method for the property.
     *
     * @param AvailableStock[] $availableStock
     *
     * @return void
     */
    public function setAvailableStock(array $availableStock)
    {
        $this->availableStock = $availableStock;
    }



    /**
     * Getter method for the property.
     *
     * @return Store[]
     */
    public function getExhibits()
    {
        return $this->exhibits;
    }



    /**
     * Setter method for the property.
     *
     * @param Store[] $exhibits
     *
     * @return void
     */
    public function setExhibits(array $exhibits)
    {
        $this->exhibits = $exhibits;
    }







}
