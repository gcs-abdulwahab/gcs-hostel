<?php

namespace App\Filament\Resources\RoomResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class RoomOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            'this is the stats  widget for Rooms'
        ];
    }
}
