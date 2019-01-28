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

class Customer extends Struct
{
    /**
     * ...
     */
    const SALUTATION_MALE = '02';
    const SALUTATION_FEMALE = '01';

    /**
     * ...
     *
     * @var int
     */
    protected $number;

    /**
     * ...
     *
     * @var string
     */
    protected $email;

    /**
     * ...
     *
     * @var string
     */
    protected $salutation;

    /**
     * ...
     *
     * @var string
     */
    protected $firstName;

    /**
     * ...
     *
     * @var string
     */
    protected $lastName;

    /**
     * ...
     *
     * @var string
     */
    protected $phone;

    /**
     * ...
     *
     * @var string
     */
    protected $street;

    /**
     * ...
     *
     * @var string
     */
    protected $zip;

    /**
     * ...
     *
     * @var string
     */
    protected $city;

    /**
     * The country in weird iso code.
     *
     * Example:
     * - D -> germany
     * - CH -> switzerland
     * - F -> france
     * - RUS -> russia
     * - A -> austria
     * - USA -> usa
     * - NL -> netherlands
     * - SE -> sweden
     * - XRU -> ???
     * - VAE -> ???
     *
     * @var string
     */
    protected $country;

    /**
     * Getter method for the property.
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Setter method for the property.
     *
     * @param int $number
     */
    public function setNumber(int $number)
    {
        $this->number = $number;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Setter method for the property.
     *
     * @param string $email
     *
     * @return void
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * Setter method for the property.
     *
     * @param string $salutation
     */
    public function setSalutation(string $salutation)
    {
        $this->salutation = $salutation;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Setter method for the property.
     *
     * @param string $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Setter method for the property.
     *
     * @param string $lastName
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Setter method for the property.
     *
     * @param string $phone
     */
    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Setter method for the property.
     *
     * @param string $street
     */
    public function setStreet(string $street)
    {
        $this->street = $street;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Setter method for the property.
     *
     * @param string $zip
     */
    public function setZip(string $zip)
    {
        $this->zip = $zip;
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
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Setter method for the property.
     *
     * @param string $country
     */
    public function setCountry(string $country)
    {
        $this->country = $country;
    }
}
