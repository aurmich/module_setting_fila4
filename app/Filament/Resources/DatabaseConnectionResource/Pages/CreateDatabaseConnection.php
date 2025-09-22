<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

<<<<<<< HEAD
=======
use Modules\Setting\Models\DatabaseConnection;
>>>>>>> 7ce3af5 (.)
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
        $connection = $this->record;

<<<<<<< HEAD
<<<<<<< HEAD
        if ($connection !== null && 'active' === $connection->status) {
=======
        if ('active' === $connection->status) {
>>>>>>> 481b350 (.)
=======
        if ($connection !== null && 'active' === $connection->status) {
>>>>>>> 467a949 (.)
=======
        /** @var DatabaseConnection|null $connection */
        $connection = $this->record;
        
        if ($connection && 'active' === $connection->status) {
>>>>>>> 7ce3af5 (.)
            $connection->testConnection();
        }
    }
}
