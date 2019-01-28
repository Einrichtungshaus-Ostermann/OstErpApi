<?php declare(strict_types=1);

if ( !function_exists("p"))
{
    function p($var)
    {
        echo '<pre>';

        print_r($var);

        echo '</pre>';

        die();
    }
}


use OstErpApi\Api\Api;
use Shopware\Components\CSRFWhitelistAware;
use OstConsultant\Services\ErpCustomerSearchServiceInterface;

class Shopware_Controllers_Frontend_OstErpApi extends Enlight_Controller_Action implements CSRFWhitelistAware
{
    /**
     * ...
     *
     * @return array
     */
    public function getWhitelistedCSRFActions()
    {
        // return all actions
        return array_values(array_filter(
            array_map(
                function ($method) {
                    return (substr($method, -6) === 'Action') ? substr($method, 0, -6) : null;
                },
                get_class_methods($this)
            ),
            function ($method) {
                return  !in_array((string) $method, ['', 'index', 'load', 'extends'], true);
            }
        ));
    }

    /**
     * ...
     */
    public function indexAction()
    {
        // ...
        die('not implemented yet');
    }

    /**
     * ...
     */
    public function testArticleAction()
    {
        if (!$this->Request()->has('number')) {
            echo "<form action='' method='post'>";
            echo 'artikel nummer: ';
            echo "<input type='text' name='number' >";
            echo "<input type='submit'>";
            die();
        }

        $number = $this->Request()->getParam('number');

        /* @var $api Api */
        $api = Shopware()->Container()->get('ost_erp_api.api');

        $asd = $api->findBy(
            'article',
            [
                '[article.number] = ' . $number
            ]
        );

        p($asd);
    }

    /**
     * ...
     */
    public function testZipAction()
    {
        $zip = "58465";

        /* @var $api Api */
        $api = Shopware()->Container()->get('ost_erp_api.api');

        $arr = $api->findBy(
            'zip',
            [
                '[zip.rangefrom] = ' . $zip
            ]
        );

        p($arr);
    }


    /**
     * ...
     */
    public function testCustomerSearchAction()
    {
        if (!$this->Request()->has('search')) {
            echo "<form action='' method='post'>";
            echo 'kunden suche: ';
            echo "<input type='text' name='search' >";
            echo "<input type='submit'>";
            die();
        }

        $search = $this->Request()->getParam('search');

        /* @var $searchService ErpCustomerSearchServiceInterface */
        $searchService = $this->container->get('ost_consultant.erp_customer_search_service');

        // explode the search for multiple search termans
        $arr = explode(' ', $search);

        // try to find customers
        $customers = $searchService->find(
            $arr
        );

        if ( count( $customers ) > 25 )
            $customers = array_slice($customers, 0, 20);

        // and assign them
        p($customers);
    }
}
