<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

use Filament\Actions\CreateAction;
<<<<<<< HEAD
use Filament\Actions\Action;
=======
>>>>>>> 9bba149 (.)
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class ManageDatabaseConnections extends ManageRecords
{
    protected static string $resource = DatabaseConnectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
