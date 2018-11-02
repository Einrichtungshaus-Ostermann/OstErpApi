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

namespace OstErpApi\Api\Gateway\Iwm\Mapping\Consultant;

use OstErpApi\Api\Gateway\Iwm\Mapping\Mapping;

class Name implements Mapping
{
    public static function getAlias()
    {
        return 'CONSULTANT_NAME';
    }

    public static function getColumn()
    {
        return 'IWMV2R1SYS.BNZR00.BNLABZ';
    }
}
