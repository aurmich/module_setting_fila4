<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

<<<<<<< HEAD
use Filament\Actions\CreateAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
=======
>>>>>>> 60ebf14 (.)
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource;

class ListDatabaseConnections extends ListRecords
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

    protected function getTableColumns(): array
    {
        return [
<<<<<<< HEAD
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
>>>>>>> 60ebf14 (.)
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
    public function table(Table $table): Table
=======
    public function table(Tables\Table $table): Tables\Table
>>>>>>> 60ebf14 (.)
    {
        return $table
            ->columns($this->getTableColumns())
            ->filters([
<<<<<<< HEAD
                SelectFilter::make('driver')
=======
                Tables\Filters\SelectFilter::make('driver')
>>>>>>> 60ebf14 (.)
                    ->options([
                        'mysql' => 'MySQL',
                        'pgsql' => 'PostgreSQL',
                        'sqlite' => 'SQLite',
                        'sqlsrv' => 'SQL Server',
                    ]),
<<<<<<< HEAD
                SelectFilter::make('status')
=======
                Tables\Filters\SelectFilter::make('status')
>>>>>>> 60ebf14 (.)
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                        'testing' => 'Testing',
                    ]),
            ])
<<<<<<< HEAD
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
                Action::make('test')
=======
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('test')
>>>>>>> 60ebf14 (.)
                    ->action(fn ($record) => $record->testConnection())
                    ->icon('heroicon-o-check-circle')
                    ->color('success'),
            ])
<<<<<<< HEAD
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
=======
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
>>>>>>> 60ebf14 (.)
                ]),
            ]);
    }
}
