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

namespace OstErpApi\Struct\Article;

use OstErpApi\Struct\Struct;

class Stock extends Struct
{
    /**
     * The location key from the ERP.
     *
     * Example:
     * - WITTEN
     * - LEVERKUSEN
     *
     * @var string
     */
    protected $location;



    /**
     * The actual available stock within the given location.
     *
     * Example:
     * - 1
     * - 100
     *
     * @var integer
     */
    protected $stock;



    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }



    /**
     * Setter method for the property.
     *
     * @param string $location
     *
     * @return void
     */
    public function setLocation(string $location)
    {
        $this->location = $location;
    }



    /**
     * Getter method for the property.
     *
     * @return int
     */
    public function getStock()
    {
        return $this->stock;
    }



    /**
     * Setter method for the property.
     *
     * @param int $stock
     *
     * @return void
     */
    public function setStock(int $stock)
    {
        $this->stock = $stock;
    }



}
