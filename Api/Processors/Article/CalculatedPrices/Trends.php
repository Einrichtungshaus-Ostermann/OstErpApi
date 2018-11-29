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

namespace OstErpApi\Api\Processors\Article\CalculatedPrices;

use OstErpApi\Struct;

class Trends
{
    /**
     * ...
     *
     * @todo calculate correct prices
     *
     * @param Struct\Article         $article
     * @param Struct\CalculatedPrice $calculatedPrice
     * @param Struct\Price           $price
     */
    public function process(Struct\CalculatedPrice $calculatedPrice, Struct\Price $price, Struct\Article $article)
    {
        // ...
        $calculatedPrice->setPrice($price->getPickupPrice());
        $calculatedPrice->setShippingCosts(20.0);
        $calculatedPrice->setAssemblySurcharge(0.0);
    }
}
