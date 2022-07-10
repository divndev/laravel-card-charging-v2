<?php

declare(strict_types=1);

namespace Dinhdjj\CardChargingV2\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Dinhdjj\CardChargingV2\CardChargingV2 connection(null|array|string $connection = null)
 * @method static \Dinhdjj\CardChargingV2\Data\CardType[] getFee()
 *
 * @see \Dinhdjj\CardChargingV2\CardChargingV2
 */
class CardChargingV2 extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'card-charging-v2';
    }
}
