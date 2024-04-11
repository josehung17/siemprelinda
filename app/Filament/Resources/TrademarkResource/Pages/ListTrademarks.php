<?php

namespace App\Filament\Resources\TrademarkResource\Pages;

use App\Filament\Resources\TrademarkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTrademarks extends ListRecords
{
    protected static string $resource = TrademarkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
