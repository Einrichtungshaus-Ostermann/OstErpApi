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

class Location extends Struct
{
    /**
     * The Company number behind the Article
     *
     * @var int
     */
    protected $company;



    /**
     * The internal ERP key for the location.
     *
     * Example
     * - WITTEN
     * - LEVERKUSEN
     *
     * @var string
     */
    protected $key;



    /**
     * A readable name for the location.
     *
     * Example:
     * - Witten
     * - Leverkusen
     *
     * @var string
     */
    protected $name;



    /**
     * ...
     *
     * @var Location\Number[]
     */
    protected $numbers = [];



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
    public function getKey()
    {
        return $this->key;
    }



    /**
     * Setter method for the property.
     *
     * @param string $key
     */
    public function setKey(string $key)
    {
        $this->key = $key;
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
     * @return Location\Number[]
     */
    public function getNumbers()
    {
        return $this->numbers;
    }



    /**
     * Setter method for the property.
     *
     * @param Location\Number[] $numbers
     */
    public function setNumbers(array $numbers)
    {
        $this->numbers = $numbers;
    }



    /**
     * Setter method for the property.
     *
     * @param Location\Number $number
     */
    public function addNumber(Location\Number $number)
    {
        $this->numbers[] = $number;
    }
}
