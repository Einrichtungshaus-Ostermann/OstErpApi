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
     * Every stock is clean and the actual available stock.
     * We may have the same location multiple times because we dont hydrate the entities.
     *
     * @var Stock[]
     */
    protected $stock = [];



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
}
