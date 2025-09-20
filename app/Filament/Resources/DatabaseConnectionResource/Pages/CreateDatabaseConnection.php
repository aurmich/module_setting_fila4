<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

<<<<<<< HEAD
use Modules\Setting\Models\DatabaseConnection;
=======
>>>>>>> 9bba149 (.)
use Filament\Resources\Pages\CreateRecord;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class CreateDatabaseConnection extends CreateRecord
{
    protected static string $resource = DatabaseConnectionResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function afterCreate(): void
    {
<<<<<<< HEAD
        /** @var DatabaseConnection|null $connection */
        $connection = $this->record;
        
        if ($connection && 'active' === $connection->status) {
=======
        $connection = $this->record;

        if ('active' === $connection->status) {
>>>>>>> 9bba149 (.)
            $connection->testConnection();
        }
    }
}
