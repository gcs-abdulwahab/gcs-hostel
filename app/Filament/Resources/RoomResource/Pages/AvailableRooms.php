<?php

namespace App\Filament\Resources\RoomResource\Pages;

use App\Filament\Resources\RoomResource;
use App\Filament\Resources\RoomResource\Widgets\RoomOverview;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class AvailableRooms extends ListRecords
{
    protected static string $resource = RoomResource::class;



    public static function getLabel(): string
    {
        return 'Available Rooms  Label';
    }

    protected function getHeaderWidgets(): array
    {
        return [
            RoomOverview::class,
        ];
    }
}
