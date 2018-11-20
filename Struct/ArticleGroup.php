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

class ArticleGroup extends Article
{
    /**
     * ...
     *
     * @var Article[]
     */
    protected $articles = [];

    /**
     * Getter method for the property.
     *
     * @return Article[]
     */
    public function getArticles(): array
    {
        return $this->articles;
    }

    /**
     * Setter method for the property.
     *
     * @param Article[] $articles
     */
    public function setArticles(array $articles)
    {
        $this->articles = $articles;
    }
}
