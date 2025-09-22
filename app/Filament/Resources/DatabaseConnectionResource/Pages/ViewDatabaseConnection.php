<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\Action;
=======
>>>>>>> 481b350 (.)
=======
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\Action;
>>>>>>> 467a949 (.)
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class ViewDatabaseConnection extends ViewRecord
{
    protected static string $resource = DatabaseConnectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 467a949 (.)
            EditAction::make(),
            DeleteAction::make(),
            Action::make('test')
                ->action(fn () => $this->record?->testConnection())
<<<<<<< HEAD
=======
            Actions\EditAction::make(),
            Actions\DeleteAction::make(),
            Actions\Action::make('test')
                ->action(fn () => $this->record->testConnection())
>>>>>>> 481b350 (.)
=======
>>>>>>> 467a949 (.)
                ->icon('heroicon-o-check-circle')
                ->color('success'),
        ];
    }
} 