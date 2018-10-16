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
     * Every available stock information for this article.
     * Every stock is clean and the actual available stock.
     * We may have the same location multiple times because we dont hydrate the entities.
     *
     * @var Article\Stock[]
     */
    protected $stock = [];



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
     * @return Article\Stock[]
     */
    public function getStock()
    {
        return $this->stock;
    }



    /**
     * Setter method for the property.
     *
     * @param Article\Stock[] $stock
     *
     * @return void
     */
    public function setStock(array $stock)
    {
        $this->stock = $stock;
    }



    /**
     * Setter method for the property.
     *
     * @param Article\Stock $stock
     *
     * @return void
     */
    public function addStock(Article\Stock $stock)
    {
        array_push( $this->stock, $stock );
    }



}
