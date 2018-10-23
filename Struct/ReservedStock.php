<?php declare(strict_types=1);
/**
 * Einrichtungshaus Ostermann GmbH & Co. KG - ERP API
 *
 * @package   OstErpApi
 *
 * @author    Tim Windelschmidt <tim.windelschmidt@ostermann.de>
 * @copyright 2018 Einrichtungshaus Ostermann GmbH & Co. KG
 * @license   proprietary
 */

namespace OstErpApi\Struct;

class ReservedStock extends Struct
{



    /**
     * A unique article number.
     *
     * @var string
     */
    protected $number;



    /**
     * The actual reserved quantity within the given location.
     *
     * Example:
     * - 1
     * - 100
     *
     * @var int
     */
    protected $quantity;

    /**
     * The company struct.
     *
     * @var Company
     */
    protected $company;




    /**
     * The location for the reserved stock.
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
