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
     *
     * @return void
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
     *
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }



}
