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

abstract class QuantityHolder extends Struct
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
     * The location key from the ERP.
     *
     * Example:
     * - WITTEN
     * - LEVERKUSEN
     *
     * @var Location
     */
    protected $location;



    /**
     * The actual reservations within the given location.
     *
     * Example:
     * - 1
     * - 100
     *
     * @var int
     */
    protected $quantity;



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
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }



    /**
     * @param string $number
     */
    public function setNumber(string $number)
    {
        $this->number = $number;
    }



    /**
     * @return Location|null
     */
    public function getLocation()
    {
        return $this->location;
    }



    /**
     * @param Location $location
     */
    public function setLocation(Location $location)
    {
        $this->location = $location;
    }



    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }



    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }
}
