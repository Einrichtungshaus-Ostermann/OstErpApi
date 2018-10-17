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

namespace OstErpApi\Struct\Location;

use OstErpApi\Struct\Struct;

class Number extends Struct
{

    /**
     * ...
     *
     * Example for WITTEN:
     * - 100
     * - 150
     * - 400
     *
     * @var integer
     */
    protected $key;



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







}
