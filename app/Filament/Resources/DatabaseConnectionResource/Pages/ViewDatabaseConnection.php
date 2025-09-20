<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\Action;
<<<<<<< HEAD
use Modules\Setting\Models\DatabaseConnection;
=======
>>>>>>> 9bba149 (.)
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class ViewDatabaseConnection extends ViewRecord
{
    protected static string $resource = DatabaseConnectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
            DeleteAction::make(),
            Action::make('test')
<<<<<<< HEAD
                ->action(function () {
                    /** @var DatabaseConnection|null $record */
                    $record = $this->record;
                    $record?->testConnection();
                })
=======
                ->action(fn () => $this->record->testConnection())
>>>>>>> 9bba149 (.)
                ->icon('heroicon-o-check-circle')
                ->color('success'),
        ];
    }
} 