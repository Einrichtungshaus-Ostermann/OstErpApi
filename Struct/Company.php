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

class Company extends Struct
{
    /**
     * A unique key / number for the company.
     *
     * Example:
     * - 1
     * - 3
     *
     * @var int
     */
    protected $key;

    /**
     * A readable company name.
     *
     * Example:
     * - Ostermann
     * - Trends
     *
     * @var string
     */
    protected $name;

    /**
     * Getter method for the property.
     *
     * @return int
     */
    public function getKey(): int
    {
        return $this->key;
    }

    /**
     * Setter method for the property.
     *
     * @param int $key
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
    public function getName(): string
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
}
