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

class Reservation extends Struct
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
     * @var string
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
    protected $amount;



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
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }



    /**
     * @param string $location
     */
    public function setLocation(string $location)
    {
        $this->location = $location;
    }



    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }



    /**
     * @param int $amount
     */
    public function setAmount(int $amount)
    {
        $this->amount = $amount;
    }
}
