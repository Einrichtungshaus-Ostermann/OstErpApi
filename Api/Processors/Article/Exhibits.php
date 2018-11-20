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

namespace OstErpApi\Api\Processors\Article;

use OstErpApi\Api\Processors\ProcessorInterface;
use OstErpApi\Struct;

class Exhibits implements ProcessorInterface
{
    /**
     * This HWG is always in exhibit if we have stock.
     *
     * @var int
     */
    private $hwg = 90;

    /**
     * {@inheritdoc}
     */
    public function process(array &$data)
    {
        // process as group or flat article?
        if ($data['ARTICLE_TYPE'] === Struct\Article::TYPE_GROUP) {
            $this->processGroup($data);
            return;
        }

        // flat article
        $this->processSingle($data);
    }

    /**
     * ...
     *
     * @param array data
     */
    private function processSingle(array &$data)
    {
        $exhibits = [];

        /* @var $stock Struct\Stock */
        foreach ($data['ARTICLE_STOCK'] as $stock) {
            if (!$stock->getLocation() instanceof Struct\Location) {
                continue;
            }

            $store = $stock->getLocation()->getStore();

            $type = $stock->getType();
            if ((int) $data['ARTICLE_HWG'] >= $this->hwg) {
                if (($type !== Struct\Stock::TYPE_EXHIBIT) && ($type !== Struct\Stock::TYPE_STOCK)) {
                    continue;
                }
            } elseif ($type !== Struct\Stock::TYPE_EXHIBIT) {
                continue;
            }

            if (isset($exhibits[$store->getKey()])) {
                continue;
            }

            $exhibits[$store->getKey()] = $store;
        }

        $data['ARTICLE_EXHIBITS'] = array_values($exhibits);
    }

    /**
     * ...
     *
     * @todo implement groups
     *
     * @param array data
     */
    private function processGroup(array &$data)
    {
        // nothing yet...
        $data['ARTICLE_EXHIBITS'] = [];
    }
}
