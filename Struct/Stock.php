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

class Stock extends QuantityHolder
{
    /**
     * The Stock Type
     *
     * K = InStore
     * L = Normal
     * B = Order
     * P = Prospect
     *
     * @var string
     */
    protected $type;



    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }



    /**
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }
}
