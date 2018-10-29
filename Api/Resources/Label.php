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

namespace OstErpApi\Api\Resources;

use OstErpApi\Api\Gateway\Gateway;
use OstErpApi\Api\Hydrator\Hydrator;

class Label extends Resource
{
    protected $name = 'Label';



    protected $data = array(
        array(
            'LABEL_KEY' => "14",
            'LABEL_NAME' => "Kleines Etikett mit Abholpreis",
            'LABEL_TYPE' => "1"
        ),
        array(
            'LABEL_KEY' => "16",
            'LABEL_NAME' => "Prod.-Info (LAM) => EHaus",
            'LABEL_TYPE' => "1"
        ),
        array(
            'LABEL_KEY' => "17",
            'LABEL_NAME' => "Prod.-Info (LAM) => TRENDS",
            'LABEL_TYPE' => "1"
        ),
        array(
            'LABEL_KEY' => "20",
            'LABEL_NAME' => "Mittleres Etik.mVolls.Preis",
            'LABEL_TYPE' => "3"
        ),
        array(
            'LABEL_KEY' => "22",
            'LABEL_NAME' => "Mittleres Eti.m. Lieferpreis",
            'LABEL_TYPE' => "2"
        ),
        array(
            'LABEL_KEY' => "24",
            'LABEL_NAME' => "Mittleres Eti.mit Abholpreis",
            'LABEL_TYPE' => "1"
        ),
        array(
            'LABEL_KEY' => "30",
            'LABEL_NAME' => "Großes Etikett m.Volls. Preis",
            'LABEL_TYPE' => "3"
        ),
        array(
            'LABEL_KEY' => "32",
            'LABEL_NAME' => "Großes Eti. mit Lieferpreis",
            'LABEL_TYPE' => "2"
        ),
        array(
            'LABEL_KEY' => "34",
            'LABEL_NAME' => "Großes Etikett mit Abholpreis",
            'LABEL_TYPE' => "1"
        ),

        array(
            'LABEL_KEY' => "70",
            'LABEL_NAME' => "A7.Etk-Abholp.",
            'LABEL_TYPE' => "1"
        ),
        array(
            'LABEL_KEY' => "71",
            'LABEL_NAME' => "A7.Etk-Abholp.-Ausl./Best.Sper",
            'LABEL_TYPE' => "1"
        ),
        array(
            'LABEL_KEY' => "72",
            'LABEL_NAME' => "A6.Etk-Abholp.",
            'LABEL_TYPE' => "1"
        ),
        array(
            'LABEL_KEY' => "73",
            'LABEL_NAME' => "A6.Etk-Abholp.-Ausl./Best.Spe",
            'LABEL_TYPE' => "1"
        ),
        array(
            'LABEL_KEY' => "74",
            'LABEL_NAME' => "A6.Etk-Liefp.",
            'LABEL_TYPE' => "2"
        ),
        array(
            'LABEL_KEY' => "75",
            'LABEL_NAME' => "A6.Etk-Liefp.-Ausl./Best.Sper",
            'LABEL_TYPE' => "2"
        ),
        array(
            'LABEL_KEY' => "76",
            'LABEL_NAME' => "A6.Etk-Vollp.",
            'LABEL_TYPE' => "3"
        ),
        array(
            'LABEL_KEY' => "77",
            'LABEL_NAME' => "A6.Etk-Vollp.-Ausl./Best.Sper",
            'LABEL_TYPE' => "3"
        ),
        array(
            'LABEL_KEY' => "78",
            'LABEL_NAME' => "A5.Etk-Abholp.",
            'LABEL_TYPE' => "1"
        ),
        array(
            'LABEL_KEY' => "79",
            'LABEL_NAME' => "A5.Etk-Abholp.-Ausl./Best.Spe",
            'LABEL_TYPE' => "1"
        ),
        array(
            'LABEL_KEY' => "80",
            'LABEL_NAME' => "A5.Etk-Liefp.",
            'LABEL_TYPE' => "2"
        ),
        array(
            'LABEL_KEY' => "81",
            'LABEL_NAME' => "A5.Etk-Liefp.-Ausl./Best.Sper",
            'LABEL_TYPE' => "2"
        ),
        array(
            'LABEL_KEY' => "82",
            'LABEL_NAME' => "A5.Etk-Vollp.",
            'LABEL_TYPE' => "3"
        ),
        array(
            'LABEL_KEY' => "83",
            'LABEL_NAME' => "A5.Etk-Vollp.-Ausl./Best.Sper",
            'LABEL_TYPE' => "3"
        ),



        array(
            'LABEL_KEY' => "84",
            'LABEL_NAME' => "A6 Etk-Abholp. WERBUNG",
            'LABEL_TYPE' => "1"
        ),
        array(
            'LABEL_KEY' => "85",
            'LABEL_NAME' => "A6 Etk-Liefp. WERBUNG",
            'LABEL_TYPE' => "2"
        ),
        array(
            'LABEL_KEY' => "86",
            'LABEL_NAME' => "A6 Etk-Vollp. WERBUNG",
            'LABEL_TYPE' => "3"
        ),
        array(
            'LABEL_KEY' => "87",
            'LABEL_NAME' => "A6 Etk-Abholp. Superchance",
            'LABEL_TYPE' => "1"
        ),
        array(
            'LABEL_KEY' => "88",
            'LABEL_NAME' => "A6 Etk-Liefp. Superchance",
            'LABEL_TYPE' => "3"
        ),
        array(
            'LABEL_KEY' => "89",
            'LABEL_NAME' => "A6 Etk-Vollp. Superchance",
            'LABEL_TYPE' => "3"
        ),



        array(
            'LABEL_KEY' => "90",
            'LABEL_NAME' => "A5 Etk-Abholp. WERBUNG",
            'LABEL_TYPE' => "1"
        ),
        array(
            'LABEL_KEY' => "91",
            'LABEL_NAME' => "A5 Etk-Liefp. WERBUNG",
            'LABEL_TYPE' => "2"
        ),
        array(
            'LABEL_KEY' => "92",
            'LABEL_NAME' => "A5 Etk-Vollp. WERBUNG",
            'LABEL_TYPE' => "3"
        ),


        array(
            'LABEL_KEY' => "93",
            'LABEL_NAME' => "A5 Etk-Abholp. Superchance",
            'LABEL_TYPE' => "3"
        ),
        array(
            'LABEL_KEY' => "94",
            'LABEL_NAME' => "A5 Etk-Liefp. Superchance",
            'LABEL_TYPE' => "3"
        ),



    );



    // [label.key] = 1
    // [label.name] = Ostermann
    // [label.type] = 1
    public function findBy(array $params = [], array $options = []): array
    {

        $data = $this->findInArray(
            $this->data,
            $params
        );


        /** @var Hydrator $hydrator */
        $hydrator = Shopware()->Container()->get('ost_erp_api.api.hydrator.label');

        return $hydrator->hydrate($data);


    }
}
