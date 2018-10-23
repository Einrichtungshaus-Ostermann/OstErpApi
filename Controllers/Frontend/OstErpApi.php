<?php declare(strict_types=1);



function p( $var )
{
    echo "<pre>";

    print_r( $var );

    echo "</pre>";

    die();
}


use Shopware\Components\CSRFWhitelistAware;
use OstErpApi\Api\Api;

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
                function ($method) { return (substr($method, -6) === 'Action') ? substr($method, 0, -6) : null; },
                get_class_methods($this)
            ),
            function ($method) { return  !in_array((string) $method, ['', 'index', 'load', 'extends'], true); }
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


        if ( !$this->Request()->has( "number" ) )
        {
            echo "<form action='' method='post'>";
            echo "artikel nummer: ";
            echo "<input type='text' name='number' >";
            echo "<input type='submit'>";
            die();
        }

        $number = $this->Request()->getParam( "number" );

        /* @var $api Api */
        $api = Shopware()->Container()->get( "ost_erp_api.api" );

        $asd = $api->findBy(
            "article",
            array(
                "[article.number] = " . $number
            )
        );



        p($asd);
    }


}
