<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 467a949 (.)
=======
>>>>>>> 7ce3af5 (.)
use Filament\Actions\CreateAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 481b350 (.)
=======
>>>>>>> 467a949 (.)
=======
>>>>>>> 7ce3af5 (.)
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class ListDatabaseConnections extends ListRecords
{
    protected static string $resource = DatabaseConnectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            CreateAction::make(),
=======
            Actions\CreateAction::make(),
>>>>>>> 481b350 (.)
=======
            CreateAction::make(),
>>>>>>> 467a949 (.)
=======
            CreateAction::make(),
>>>>>>> 7ce3af5 (.)
        ];
    }

    protected function getTableColumns(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 467a949 (.)
=======
>>>>>>> 7ce3af5 (.)
            TextColumn::make('name')
                ->searchable()
                ->sortable(),
            TextColumn::make('driver')
                ->searchable()
                ->sortable(),
            TextColumn::make('host')
                ->searchable()
                ->sortable(),
            TextColumn::make('database')
                ->searchable()
                ->sortable(),
            TextColumn::make('status')
<<<<<<< HEAD
<<<<<<< HEAD
=======
            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('driver')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('host')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('database')
                ->searchable()
                ->sortable(),
            Tables\Columns\TextColumn::make('status')
>>>>>>> 481b350 (.)
=======
>>>>>>> 467a949 (.)
=======
>>>>>>> 7ce3af5 (.)
                ->badge()
                ->color(fn (string $state): string => match ($state) {
                    'active' => 'success',
                    'inactive' => 'danger',
                    'testing' => 'warning',
                    default => 'gray',
                }),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
    public function table(Table $table): Table
=======
    public function table(Tables\Table $table): Tables\Table
>>>>>>> 481b350 (.)
=======
    public function table(Table $table): Table
>>>>>>> 467a949 (.)
=======
    public function table(Table $table): Table
>>>>>>> 7ce3af5 (.)
    {
        return $table
            ->columns($this->getTableColumns())
            ->filters([
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                SelectFilter::make('driver')
=======
                Tables\Filters\SelectFilter::make('driver')
>>>>>>> 481b350 (.)
=======
                SelectFilter::make('driver')
>>>>>>> 467a949 (.)
=======
                SelectFilter::make('driver')
>>>>>>> 7ce3af5 (.)
                    ->options([
                        'mysql' => 'MySQL',
                        'pgsql' => 'PostgreSQL',
                        'sqlite' => 'SQLite',
                        'sqlsrv' => 'SQL Server',
                    ]),
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                SelectFilter::make('status')
=======
                Tables\Filters\SelectFilter::make('status')
>>>>>>> 481b350 (.)
=======
                SelectFilter::make('status')
>>>>>>> 467a949 (.)
=======
                SelectFilter::make('status')
>>>>>>> 7ce3af5 (.)
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                        'testing' => 'Testing',
                    ]),
            ])
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 467a949 (.)
=======
>>>>>>> 7ce3af5 (.)
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
                Action::make('test')
<<<<<<< HEAD
<<<<<<< HEAD
=======
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('test')
>>>>>>> 481b350 (.)
=======
>>>>>>> 467a949 (.)
=======
>>>>>>> 7ce3af5 (.)
                    ->action(fn ($record) => $record->testConnection())
                    ->icon('heroicon-o-check-circle')
                    ->color('success'),
            ])
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
=======
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
>>>>>>> 481b350 (.)
=======
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
>>>>>>> 467a949 (.)
=======
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
>>>>>>> 7ce3af5 (.)
                ]),
            ]);
    }
}
