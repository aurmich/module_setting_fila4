<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

<<<<<<< HEAD
use Filament\Actions\CreateAction;
=======
>>>>>>> 60ebf14 (.)
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class ManageDatabaseConnections extends ManageRecords
{
    protected static string $resource = DatabaseConnectionResource::class;

    protected function getHeaderActions(): array
    {
<<<<<<< HEAD
        return [
            CreateAction::make(),
=======
        /** @var array<string, \Filament\Actions\Action> */
        return [
            Actions\CreateAction::make(),
>>>>>>> 60ebf14 (.)
        ];
    }
}
