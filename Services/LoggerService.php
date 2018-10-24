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

namespace OstErpApi\Services;



class LoggerService implements LoggerServiceInterface
{




    /**
     * {@inheritdoc}
     */
    public function log($message,array $params = array())
    {

        $dir = Shopware()->Container()->getParameter("ost_erp_api.plugin_dir");

        $filename = date("Y-m-d-H-i-s" ) . "-" . substr(md5(microtime()),0,6) . ".txt";

        file_put_contents($dir . $filename, $message . " (" . print_r($params,true) . ")");


    }
}
