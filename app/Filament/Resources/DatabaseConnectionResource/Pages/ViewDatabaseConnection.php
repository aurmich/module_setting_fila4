<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

<<<<<<< HEAD
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\Action;
=======
>>>>>>> 60ebf14 (.)
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class ViewDatabaseConnection extends ViewRecord
{
    protected static string $resource = DatabaseConnectionResource::class;

    protected function getHeaderActions(): array
    {
<<<<<<< HEAD
        return [
            EditAction::make(),
            DeleteAction::make(),
            Action::make('test')
                ->action(fn () => $this->record->testConnection())
=======
        /** @var array<string, \Filament\Actions\Action> */
        return [
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
            Actions\Action::make('test')
                ->action(function () {
                    /** @var \Modules\Setting\Models\DatabaseConnection|null $record */
                    $record = $this->record;
                    $record?->testConnection();
                })
>>>>>>> 60ebf14 (.)
                ->icon('heroicon-o-check-circle')
                ->color('success'),
        ];
    }
} 