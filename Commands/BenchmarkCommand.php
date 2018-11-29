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

namespace OstErpApi\Commands;

use OstErpApi\Api\Api;
use Shopware\Commands\ShopwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class BenchmarkCommand extends ShopwareCommand
{


    /**
     * @var Api
     */
    private $api;


    public function __construct(Api $api)
    {
        parent::__construct();
        $this->api = $api;
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $startTime = time();
        $articles = $this->api->findBy('article' [
            '[article.number] < 100500'
        ]);
        $output->writeln((new \DateTime())->format('Y-m-d H:i:s') . ' | ' . count($articles) . ' | ' . (time() - $startTime));
    }
}
