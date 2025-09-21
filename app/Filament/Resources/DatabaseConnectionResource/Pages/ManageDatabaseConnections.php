<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

<<<<<<< HEAD
use Filament\Actions\CreateAction;
=======
>>>>>>> 481b350 (.)
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class ManageDatabaseConnections extends ManageRecords
{
    protected static string $resource = DatabaseConnectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
            CreateAction::make(),
=======
            Actions\CreateAction::make(),
>>>>>>> 481b350 (.)
        ];
    }
}
