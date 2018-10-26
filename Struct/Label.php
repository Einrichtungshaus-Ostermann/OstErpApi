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

class Label extends Struct
{


    /**
     * ...
     *
     * @var int
     */
    protected $key;



    /**
     * ...
     *
     * @var string
     */
    protected $name;




    const TYPE_PICKUP = 1;
    const TYPE_DELIVERY = 2;
    const TYPE_FULLSERVICE = 3;



    /**
     * ...
     *
     * @var int
     */
    protected $type;



    /**
     * Getter method for the property.
     *
     * @return int
     */
    public function getKey()
    {
        return $this->key;
    }



    /**
     * Setter method for the property.
     *
     * @param int $key
     *
     * @return void
     */
    public function setKey(int $key)
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



    /**
     * Getter method for the property.
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }



    /**
     * Setter method for the property.
     *
     * @param int $type
     *
     * @return void
     */
    public function setType(int $type)
    {
        $this->type = $type;
    }






}
