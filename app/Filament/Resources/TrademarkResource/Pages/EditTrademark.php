<?php

namespace App\Filament\Resources\TrademarkResource\Pages;

use App\Filament\Resources\TrademarkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTrademark extends EditRecord
{
    protected static string $resource = TrademarkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
