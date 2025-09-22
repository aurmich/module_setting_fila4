<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\CreateAction;
=======
>>>>>>> 481b350 (.)
=======
use Filament\Actions\CreateAction;
>>>>>>> 467a949 (.)
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
<<<<<<< HEAD
            CreateAction::make(),
=======
            Actions\CreateAction::make(),
>>>>>>> 481b350 (.)
=======
            CreateAction::make(),
>>>>>>> 467a949 (.)
        ];
    }
}
