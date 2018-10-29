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

namespace OstErpApi\Api\Gateway\Mock;

use OstErpApi\Api\Gateway\Gateway;

class Location extends Gateway
{





    private $data = [
        [
            'LOCATION_KEY'      => "100",
            'LOCATION_STORE'      => "01",
            'LOCATION_COMPANY'      => "1",
        ],
        [
            'LOCATION_KEY'      => "150",
            'LOCATION_STORE'      => "04",
            'LOCATION_COMPANY'      => "3",
        ],
        [
            'LOCATION_KEY'      => "400",
            'LOCATION_STORE'      => "01",
            'LOCATION_COMPANY'      => "1",
        ],

        [
            'LOCATION_KEY'      => "450",
            'LOCATION_STORE'      => "01",
            'LOCATION_COMPANY'      => "1",
        ],
        [
            'LOCATION_KEY'      => "900",
            'LOCATION_STORE'      => "01",
            'LOCATION_COMPANY'      => "1",
        ],



        [
            'LOCATION_KEY'      => "500",
            'LOCATION_STORE'      => "11",
            'LOCATION_COMPANY'      => "1",
        ],
        [
            'LOCATION_KEY'      => "501",
            'LOCATION_STORE'      => "11",
            'LOCATION_COMPANY'      => "1",
        ],
        [
            'LOCATION_KEY'      => "550",
            'LOCATION_STORE'      => "12",
            'LOCATION_COMPANY'      => "3",
        ],
        [
            'LOCATION_KEY'      => "200",
            'LOCATION_STORE'      => "11",
            'LOCATION_COMPANY'      => "1",
        ],
        [
            'LOCATION_KEY'      => "250",
            'LOCATION_STORE'      => "12",
            'LOCATION_COMPANY'      => "3",
        ],




        [
            'LOCATION_KEY'      => "315",
            'LOCATION_STORE'      => "03",
            'LOCATION_COMPANY'      => "1",
        ],
        [
            'LOCATION_KEY'      => "600",
            'LOCATION_STORE'      => "03",
            'LOCATION_COMPANY'      => "1",
        ],
        [
            'LOCATION_KEY'      => "615",
            'LOCATION_STORE'      => "06",
            'LOCATION_COMPANY'      => "3",
        ],




        [
            'LOCATION_KEY'      => "700",
            'LOCATION_STORE'      => "07",
            'LOCATION_COMPANY'      => "1",
        ],
        [
            'LOCATION_KEY'      => "750",
            'LOCATION_STORE'      => "08",
            'LOCATION_COMPANY'      => "3",
        ],
        [
            'LOCATION_KEY'      => "800",
            'LOCATION_STORE'      => "07",
            'LOCATION_COMPANY'      => "1",
        ],
        [
            'LOCATION_KEY'      => "850",
            'LOCATION_STORE'      => "08",
            'LOCATION_COMPANY'      => "3",
        ],




        [
            'LOCATION_KEY'      => "365",
            'LOCATION_STORE'      => "02",
            'LOCATION_COMPANY'      => "1",
        ],
        [
            'LOCATION_KEY'      => "660",
            'LOCATION_STORE'      => "02",
            'LOCATION_COMPANY'      => "1",
        ],
        [
            'LOCATION_KEY'      => "665",
            'LOCATION_STORE'      => "05",
            'LOCATION_COMPANY'      => "3",
        ],
        [
            'LOCATION_KEY'      => "950",
            'LOCATION_STORE'      => "02",
            'LOCATION_COMPANY'      => "1",
        ],




    ];




    public function findBy(array $params = []): array
    {
        $data = $this->findInArray(
            $this->data,
            $params
        );

        return $data;
    }
}
