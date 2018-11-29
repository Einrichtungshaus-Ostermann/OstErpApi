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

class Consultant extends Struct
{
    /**
     * ...
     *
     * @var string
     */
    protected $number;

    /**
     * ...
     *
     * @var string
     */
    protected $name;

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
}
