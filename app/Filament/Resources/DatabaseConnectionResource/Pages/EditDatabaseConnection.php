<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

use Filament\Actions\DeleteAction;
use Filament\Actions\Action;
<<<<<<< HEAD
use Modules\Setting\Models\DatabaseConnection;
=======
>>>>>>> 9bba149 (.)
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class EditDatabaseConnection extends EditRecord
{
    protected static string $resource = DatabaseConnectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
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

    protected function afterSave(): void
    {
<<<<<<< HEAD
        /** @var DatabaseConnection|null $record */
        $record = $this->record;
        
        if ($record && 'active' === $record->status) {
            $record->testConnection();
=======
        if ('active' === $this->record->status) {
            $this->record->testConnection();
>>>>>>> 9bba149 (.)
        }
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
