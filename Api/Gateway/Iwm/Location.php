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

namespace OstErpApi\Api\Gateway\Iwm;

class Location extends Gateway
{
    /**
     * We have static and pre-defined locations.
     *
     * @var array
     */
    protected static $data = [
        [
            'LOCATION_KEY'     => '100',
            'LOCATION_TYPE'    => 'B',
            'LOCATION_STORE'   => '01',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '110',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '01',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '120',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '01',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '130',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '01',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '140',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '01',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '150',
            'LOCATION_TYPE'    => 'B',
            'LOCATION_STORE'   => '01',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '177',
            'LOCATION_TYPE'    => 'R',
            'LOCATION_STORE'   => '01',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '180',
            'LOCATION_TYPE'    => 'X',
            'LOCATION_STORE'   => '01',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '181',
            'LOCATION_TYPE'    => 'X',
            'LOCATION_STORE'   => '01',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '190',
            'LOCATION_TYPE'    => 'B',
            'LOCATION_STORE'   => '01',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '199',
            'LOCATION_TYPE'    => 'B',
            'LOCATION_STORE'   => '01',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '200',
            'LOCATION_TYPE'    => 'I',
            'LOCATION_STORE'   => '02',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '210',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '02',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '220',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '02',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '230',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '02',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '240',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '02',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '250',
            'LOCATION_TYPE'    => 'B',
            'LOCATION_STORE'   => '02',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '277',
            'LOCATION_TYPE'    => 'R',
            'LOCATION_STORE'   => '02',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '310',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '03',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '315',
            'LOCATION_TYPE'    => 'B',
            'LOCATION_STORE'   => '03',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '317',
            'LOCATION_TYPE'    => 'R',
            'LOCATION_STORE'   => '03',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '360',
            'LOCATION_TYPE'    => 'B',
            'LOCATION_STORE'   => '11',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '361',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '11',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '365',
            'LOCATION_TYPE'    => 'B',
            'LOCATION_STORE'   => '11',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '367',
            'LOCATION_TYPE'    => 'R',
            'LOCATION_STORE'   => '11',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '400',
            'LOCATION_TYPE'    => 'I',
            'LOCATION_STORE'   => '04',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '410',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '04',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '420',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '04',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '430',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '04',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '440',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '04',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '450',
            'LOCATION_TYPE'    => 'B',
            'LOCATION_STORE'   => '04',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '477',
            'LOCATION_TYPE'    => 'R',
            'LOCATION_STORE'   => '04',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '497',
            'LOCATION_TYPE'    => 'X',
            'LOCATION_STORE'   => '04',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '498',
            'LOCATION_TYPE'    => 'X',
            'LOCATION_STORE'   => '04',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '499',
            'LOCATION_TYPE'    => 'X',
            'LOCATION_STORE'   => '04',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '500',
            'LOCATION_TYPE'    => 'I',
            'LOCATION_STORE'   => '05',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '501',
            'LOCATION_TYPE'    => 'I',
            'LOCATION_STORE'   => '05',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '510',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '05',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '520',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '05',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '530',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '05',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '540',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '05',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '550',
            'LOCATION_TYPE'    => 'B',
            'LOCATION_STORE'   => '05',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '577',
            'LOCATION_TYPE'    => 'R',
            'LOCATION_STORE'   => '05',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '600',
            'LOCATION_TYPE'    => 'I',
            'LOCATION_STORE'   => '06',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '610',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '06',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '615',
            'LOCATION_TYPE'    => 'B',
            'LOCATION_STORE'   => '06',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '617',
            'LOCATION_TYPE'    => 'R',
            'LOCATION_STORE'   => '06',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '660',
            'LOCATION_TYPE'    => 'I',
            'LOCATION_STORE'   => '12',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '661',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '12',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '665',
            'LOCATION_TYPE'    => 'B',
            'LOCATION_STORE'   => '12',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '667',
            'LOCATION_TYPE'    => 'R',
            'LOCATION_STORE'   => '12',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '700',
            'LOCATION_TYPE'    => 'I',
            'LOCATION_STORE'   => '07',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '700',
            'LOCATION_TYPE'    => 'I',
            'LOCATION_STORE'   => '08',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '710',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '07',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '750',
            'LOCATION_TYPE'    => 'B',
            'LOCATION_STORE'   => '07',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '777',
            'LOCATION_TYPE'    => 'R',
            'LOCATION_STORE'   => '07',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '800',
            'LOCATION_TYPE'    => 'Z',
            'LOCATION_STORE'   => '08',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '810',
            'LOCATION_TYPE'    => 'A',
            'LOCATION_STORE'   => '08',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '850',
            'LOCATION_TYPE'    => 'B',
            'LOCATION_STORE'   => '08',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '877',
            'LOCATION_TYPE'    => 'R',
            'LOCATION_STORE'   => '08',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '900',
            'LOCATION_TYPE'    => 'I',
            'LOCATION_STORE'   => '01',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '900',
            'LOCATION_TYPE'    => 'I',
            'LOCATION_STORE'   => '04',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '901',
            'LOCATION_TYPE'    => 'B',
            'LOCATION_STORE'   => '01',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '940',
            'LOCATION_TYPE'    => 'I',
            'LOCATION_STORE'   => '04',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '944',
            'LOCATION_TYPE'    => 'I',
            'LOCATION_STORE'   => '04',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '945',
            'LOCATION_TYPE'    => 'I',
            'LOCATION_STORE'   => '01',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '945',
            'LOCATION_TYPE'    => 'I',
            'LOCATION_STORE'   => '04',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '946',
            'LOCATION_TYPE'    => 'I',
            'LOCATION_STORE'   => '04',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '947',
            'LOCATION_TYPE'    => 'R',
            'LOCATION_STORE'   => '04',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '948',
            'LOCATION_TYPE'    => 'I',
            'LOCATION_STORE'   => '04',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '950',
            'LOCATION_TYPE'    => 'I',
            'LOCATION_STORE'   => '11',
            'LOCATION_COMPANY' => '1',
        ],
        [
            'LOCATION_KEY'     => '950',
            'LOCATION_TYPE'    => 'I',
            'LOCATION_STORE'   => '12',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '967',
            'LOCATION_TYPE'    => 'R',
            'LOCATION_STORE'   => '12',
            'LOCATION_COMPANY' => '3',
        ],
        [
            'LOCATION_KEY'     => '977',
            'LOCATION_TYPE'    => 'R',
            'LOCATION_STORE'   => '01',
            'LOCATION_COMPANY' => '1',
        ]
    ];

    /**
     * {@inheritdoc}
     */
    public function findBy(array $params = []): array
    {
        // find in our pre-defined array
        $data = $this->findInArray(
            static::$data,
            $params
        );

        // and return the results
        return $data;
    }
}
