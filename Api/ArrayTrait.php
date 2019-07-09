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

namespace OstErpApi\Api;

trait ArrayTrait
{
    /**
     * Finds elements in array for mock elements.
     *
     * Example:
     * - [company.key] > 1
     * - [company.name] = 'Ostermann'
     *
     * @param array $data
     * @param array $params
     *
     * @return array
     */
    protected function findInArray(array $data, array $params = []): array
    {
        if (count($params) === 0) {
            return $data;
        }

        $adapter = Shopware()->Container()->get('ost_erp_api.configuration')['adapter'];

        /* @var $parser Gateway\ParserInterface */
        $parser = Shopware()->Container()->get('ost_erp_api.api.gateway.' . $adapter . '.mapping.parser');

        $arrParams = [];

        foreach ($params as $param) {
            $split = explode(' ', $param);

            $arr = [
                'column'   => $parser->parseParameter($split[0]),
                'operator' => $split[1],
                'value'    => trim($split[2], "'\"")
            ];

            $arrParams[] = $arr;
        }

        $result = [];

        foreach ($data as $row) {
            $valid = 1;

            // Check all parameters and operate an binary and on the $valid variable which results in a true when all parameters match.
            foreach ($arrParams as $param) {
                switch ($param['operator']) {
                    case '=':
                        $valid &= (string) $row[$param['column']] === (string) $param['value'];
                        break;
                    case '>':
                        $valid &= $row[$param['column']] > $param['value'];
                        break;
                    default:
                        $valid = 0;
                }
            }

            if ($valid === 1) {
                $result[] = $row;
            }
        }

        return $result;
    }
}
