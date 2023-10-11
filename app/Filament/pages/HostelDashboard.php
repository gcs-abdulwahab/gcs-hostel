<?php

use Filament\Pages\Dashboard as FilamentDashboard;

class HostelDashboard extends FilamentDashboard
{
    public static $icon = 'heroicon-o-home';

    public static $navigation = 'Hostel';


    public static function title(): string
    {
        return 'Hostel';
    }
    public function canSee($user): bool
    {
        return true;
    }
}


?>
