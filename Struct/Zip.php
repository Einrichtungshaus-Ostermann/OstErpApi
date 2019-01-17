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

class Zip extends Struct
{
    /**
     * ...
     *
     * @var string
     */
    protected $rangeFrom;

    /**
     * ...
     *
     * @var string
     */
    protected $rangeTo;

    /**
     * ...
     *
     * @var string
     */
    protected $city;

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getRangeFrom()
    {
        return $this->rangeFrom;
    }

    /**
     * Setter method for the property.
     *
     * @param string $rangeFrom
     *
     * @return void
     */
    public function setRangeFrom(string $rangeFrom)
    {
        $this->rangeFrom = $rangeFrom;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getRangeTo()
    {
        return $this->rangeTo;
    }

    /**
     * Setter method for the property.
     *
     * @param string $rangeTo
     *
     * @return void
     */
    public function setRangeTo(string $rangeTo)
    {
        $this->rangeTo = $rangeTo;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Setter method for the property.
     *
     * @param string $city
     *
     * @return void
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }
}
