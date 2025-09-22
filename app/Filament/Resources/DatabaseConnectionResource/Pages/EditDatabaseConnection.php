<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use Filament\Actions\DeleteAction;
use Filament\Actions\Action;
=======
>>>>>>> 481b350 (.)
=======
use Filament\Actions\DeleteAction;
use Filament\Actions\Action;
>>>>>>> 467a949 (.)
=======
use Filament\Actions\DeleteAction;
use Filament\Actions\Action;
use Modules\Setting\Models\DatabaseConnection;
>>>>>>> 7ce3af5 (.)
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class EditDatabaseConnection extends EditRecord
{
    protected static string $resource = DatabaseConnectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            DeleteAction::make(),
            Action::make('test')
                ->action(fn () => $this->record?->testConnection())
=======
            Actions\DeleteAction::make(),
            Actions\Action::make('test')
                ->action(fn () => $this->record->testConnection())
>>>>>>> 481b350 (.)
=======
            DeleteAction::make(),
            Action::make('test')
                ->action(fn () => $this->record?->testConnection())
>>>>>>> 467a949 (.)
=======
            DeleteAction::make(),
            Action::make('test')
                ->action(function () {
                    /** @var DatabaseConnection|null $record */
                    $record = $this->record;
                    $record?->testConnection();
                })
>>>>>>> 7ce3af5 (.)
                ->icon('heroicon-o-check-circle')
                ->color('success'),
        ];
    }

    protected function afterSave(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        if ($this->record !== null && 'active' === $this->record->status) {
=======
        if ('active' === $this->record->status) {
>>>>>>> 481b350 (.)
=======
        if ($this->record !== null && 'active' === $this->record->status) {
>>>>>>> 467a949 (.)
            $this->record->testConnection();
=======
        /** @var DatabaseConnection|null $record */
        $record = $this->record;
        
        if ($record && 'active' === $record->status) {
            $record->testConnection();
>>>>>>> 7ce3af5 (.)
        }
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
