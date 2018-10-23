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

class Stock extends Struct
{

    /**
     * A unique article number.
     *
     * @var string
     */
    protected $number;



    /**
     * The quantity within the given location.
     *
     * Example:
     * - 1
     * - 100
     *
     * @var int
     */
    protected $quantity;


    const TYPE_STOCK = "L";
    const TYPE_EXHIBIT = "K";
    const TYPE_ORDER = "B";
    const TYPE_BROCHURE = "P";
    const TYPE_DIRECT = "D";


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
    protected $type;


    /**
     * The company.
     *
     * @var Company
     */
    protected $company;




    /**
     * The location of this stock.
     *
     * @var Location
     */
    protected $location;



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
     * @return Location
     */
    public function getLocation()
    {
        return $this->location;
    }



    /**
     * Setter method for the property.
     *
     * @param Location $location
     *
     * @return void
     */
    public function setLocation(Location $location)
    {
        $this->location = $location;
    }






}
