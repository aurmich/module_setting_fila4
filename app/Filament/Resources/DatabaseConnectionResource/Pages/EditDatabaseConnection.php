<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

<<<<<<< HEAD
use Filament\Actions\DeleteAction;
use Filament\Actions\Action;
=======
>>>>>>> 60ebf14 (.)
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class EditDatabaseConnection extends EditRecord
{
    protected static string $resource = DatabaseConnectionResource::class;

    protected function getHeaderActions(): array
    {
<<<<<<< HEAD
        return [
            DeleteAction::make(),
            Action::make('test')
                ->action(fn () => $this->record->testConnection())
=======
        /** @var array<string, \Filament\Actions\Action> */
        return [
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

    protected function afterSave(): void
    {
<<<<<<< HEAD
        if ('active' === $this->record->status) {
            $this->record->testConnection();
=======
        /** @var \Modules\Setting\Models\DatabaseConnection|null $record */
        $record = $this->record;
        
        if ($record && 'active' === $record->status) {
            $record->testConnection();
>>>>>>> 60ebf14 (.)
        }
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
