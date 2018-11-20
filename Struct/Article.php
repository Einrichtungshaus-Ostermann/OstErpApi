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

class Article extends Struct
{
    const DISPOSITION_STOCK = 'L';
    const DISPOSITION_EXHIBIT = 'K';
    const DISPOSITION_ORDER = 'B';
    const DISPOSITION_BROCHURE = 'P';
    const DISPOSITION_DIRECT = 'D';

    const TYPE_SINGLE = 'E';
    const TYPE_GROUP = 'D';
    const TYPE_SET = 'S';

    /**
     * A unique article number.
     *
     * @var string
     */
    protected $number;

    /**
     * ...
     *
     * @var int
     */
    protected $hwg;

    /**
     * ...
     *
     * @var int
     */
    protected $uwg;

    protected $supplierNumber;

    protected $deliveryTime;

    protected $shippingType;

    protected $shippingCosts = 0.0;

    protected $assemblySurcharge = 0.0;

    /**
     * ...
     *
     * @var Label
     */
    protected $label;

    /**
     * A readable article name.
     *
     * @var string
     */
    protected $name;

    /**
     * The weight.
     *
     * @var float
     */
    protected $weight;

    /**
     * ...
     *
     * @var float
     */
    protected $width;

    /**
     * ...
     *
     * @var float
     */
    protected $height;

    /**
     * ...
     *
     * @var float
     */
    protected $depth;

    /**
     * The company struct.
     *
     * @var Company
     */
    protected $company;

    /**
     * The stock Type
     *
     * K = quantity in exhibit
     * L = default stock in the warehouse
     * B = stock which has to be ordered
     * P = stock which is reserved for a broschure or for any event
     * D = direktanlieferung
     *
     * @var string
     */
    protected $disposition;

    /**
     * ...
     *
     * E -> single article
     * D -> dynamic group (with children as components)
     * S -> sets with its own stock
     *
     * @var string
     */
    protected $type;

    /**
     * Every available stock information for this article.
     *
     * @var Stock[]
     */
    protected $stock = [];

    /**
     * Every available reservation information for this article.
     *
     * @var ReservedStock[]
     */
    protected $reservedStock = [];

    /**
     * Every available stock grouped by store.
     *
     * @var AvailableStock[]
     */
    protected $availableStock = [];

    /**
     * In which Stores is the Article
     *
     * @var Store[]
     */
    protected $exhibits = [];

    /**
     * ...
     *
     * @var Price[]
     */
    protected $prices = [];

    /**
     * A calculated price for every store.
     *
     * @var CalculatedPrice[]
     */
    protected $calculatedPrices = [];

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getNumber(): string
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

    /**
     * Getter method for the property.
     *
     * @return int
     */
    public function getHwg(): int
    {
        return $this->hwg;
    }

    /**
     * Setter method for the property.
     *
     * @param int $hwg
     */
    public function setHwg(int $hwg)
    {
        $this->hwg = $hwg;
    }

    /**
     * Getter method for the property.
     *
     * @return int
     */
    public function getUwg(): int
    {
        return $this->uwg;
    }

    /**
     * Setter method for the property.
     *
     * @param int $uwg
     */
    public function setUwg(int $uwg)
    {
        $this->uwg = $uwg;
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

    /**
     * Getter method for the property.
     *
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * Setter method for the property.
     *
     * @param float $weight
     */
    public function setWeight(float $weight)
    {
        $this->weight = $weight;
    }

    /**
     * Getter method for the property.
     *
     * @return Company
     */
    public function getCompany(): Company
    {
        return $this->company;
    }

    /**
     * Setter method for the property.
     *
     * @param Company $company
     */
    public function setCompany(Company $company)
    {
        $this->company = $company;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getDisposition(): string
    {
        return $this->disposition;
    }

    /**
     * Setter method for the property.
     *
     * @param string $disposition
     */
    public function setDisposition(string $disposition)
    {
        $this->disposition = $disposition;
    }

    /**
     * Getter method for the property.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Setter method for the property.
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * Getter method for the property.
     *
     * @return Stock[]
     */
    public function getStock(): array
    {
        return $this->stock;
    }

    /**
     * Setter method for the property.
     *
     * @param Stock[] $stock
     */
    public function setStock(array $stock)
    {
        $this->stock = $stock;
    }

    /**
     * Getter method for the property.
     *
     * @return ReservedStock[]
     */
    public function getReservedStock(): array
    {
        return $this->reservedStock;
    }

    /**
     * Setter method for the property.
     *
     * @param ReservedStock[] $reservedStock
     */
    public function setReservedStock(array $reservedStock)
    {
        $this->reservedStock = $reservedStock;
    }

    /**
     * Getter method for the property.
     *
     * @return AvailableStock[]
     */
    public function getAvailableStock(): array
    {
        return $this->availableStock;
    }

    /**
     * Setter method for the property.
     *
     * @param AvailableStock[] $availableStock
     */
    public function setAvailableStock(array $availableStock)
    {
        $this->availableStock = $availableStock;
    }

    /**
     * Getter method for the property.
     *
     * @return Store[]
     */
    public function getExhibits(): array
    {
        return $this->exhibits;
    }

    /**
     * Setter method for the property.
     *
     * @param Store[] $exhibits
     */
    public function setExhibits(array $exhibits)
    {
        $this->exhibits = $exhibits;
    }

    /**
     * Getter method for the property.
     *
     * @return Label
     */
    public function getLabel(): Label
    {
        return $this->label;
    }

    /**
     * Setter method for the property.
     *
     * @param Label $label
     */
    public function setLabel(Label $label)
    {
        $this->label = $label;
    }

    /**
     * Getter method for the property.
     *
     * @return Price[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    /**
     * Setter method for the property.
     *
     * @param Price[] $prices
     */
    public function setPrices(array $prices)
    {
        $this->prices = $prices;
    }

    /**
     * Getter method for the property.
     *
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * Setter method for the property.
     *
     * @param float $width
     */
    public function setWidth(float $width)
    {
        $this->width = $width;
    }

    /**
     * Getter method for the property.
     *
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * Setter method for the property.
     *
     * @param float $height
     */
    public function setHeight(float $height)
    {
        $this->height = $height;
    }

    /**
     * Getter method for the property.
     *
     * @return float
     */
    public function getDepth(): float
    {
        return $this->depth;
    }

    /**
     * Setter method for the property.
     *
     * @param float $depth
     */
    public function setDepth(float $depth)
    {
        $this->depth = $depth;
    }

    /**
     * Getter method for the property.
     *
     * @return CalculatedPrice[]
     */
    public function getCalculatedPrices(): array
    {
        return $this->calculatedPrices;
    }

    /**
     * Setter method for the property.
     *
     * @param CalculatedPrice[] $calculatedPrices
     */
    public function setCalculatedPrices(array $calculatedPrices)
    {
        $this->calculatedPrices = $calculatedPrices;
    }

    /**
     * ...
     *
     * @param CalculatedPrice $calculatedPrice
     */
    public function addCalculatedPrice(CalculatedPrice $calculatedPrice)
    {
        $this->calculatedPrices[] = $calculatedPrice;
    }
}
