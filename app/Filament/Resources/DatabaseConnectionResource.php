<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Resources;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 467a949 (.)
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\KeyValue;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Actions\ViewAction;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages\ListDatabaseConnections;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages\CreateDatabaseConnection;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages\ViewDatabaseConnection;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages\EditDatabaseConnection;
use Filament\Forms;
<<<<<<< HEAD
=======
use Filament\Forms;
use Filament\Forms\Form;
>>>>>>> 481b350 (.)
=======
>>>>>>> 467a949 (.)
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Modules\Setting\Models\DatabaseConnection;
use Modules\Setting\Filament\Resources\DatabaseConnectionResource\Pages;

class DatabaseConnectionResource extends Resource
{
    protected static ?string $model = DatabaseConnection::class;

<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 467a949 (.)
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-database';

    protected static string | \UnitEnum | null $navigationGroup = 'Configurazione';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Select::make('driver')
<<<<<<< HEAD
=======
    protected static ?string $navigationIcon = 'heroicon-o-database';

    protected static ?string $navigationGroup = 'Configurazione';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('driver')
>>>>>>> 481b350 (.)
=======
>>>>>>> 467a949 (.)
                    ->required()
                    ->options([
                        'mysql' => 'MySQL',
                        'pgsql' => 'PostgreSQL',
                        'sqlite' => 'SQLite',
                        'sqlsrv' => 'SQL Server',
                    ]),
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 467a949 (.)
                TextInput::make('host')
                    ->required()
                    ->maxLength(255),
                TextInput::make('port')
                    ->required()
                    ->numeric(),
                TextInput::make('database')
                    ->required()
                    ->maxLength(255),
                TextInput::make('username')
                    ->required()
                    ->maxLength(255),
                TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255),
                TextInput::make('charset')
                    ->maxLength(255),
                TextInput::make('collation')
                    ->maxLength(255),
                TextInput::make('prefix')
                    ->maxLength(255),
                Toggle::make('strict')
                    ->required(),
                TextInput::make('engine')
                    ->maxLength(255),
                KeyValue::make('options'),
                Select::make('status')
<<<<<<< HEAD
=======
                Forms\Components\TextInput::make('host')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('port')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('database')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('username')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('charset')
                    ->maxLength(255),
                Forms\Components\TextInput::make('collation')
                    ->maxLength(255),
                Forms\Components\TextInput::make('prefix')
                    ->maxLength(255),
                Forms\Components\Toggle::make('strict')
                    ->required(),
                Forms\Components\TextInput::make('engine')
                    ->maxLength(255),
                Forms\Components\KeyValue::make('options'),
                Forms\Components\Select::make('status')
>>>>>>> 481b350 (.)
=======
>>>>>>> 467a949 (.)
                    ->required()
                    ->options([
                        'active' => 'Active',
                        'inactive' => 'Inactive',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 467a949 (.)
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('driver')
                    ->searchable(),
                TextColumn::make('host')
                    ->searchable(),
                TextColumn::make('port')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('database')
                    ->searchable(),
                TextColumn::make('username')
                    ->searchable(),
                TextColumn::make('charset')
                    ->searchable(),
                TextColumn::make('collation')
                    ->searchable(),
                TextColumn::make('prefix')
                    ->searchable(),
                IconColumn::make('strict')
                    ->boolean(),
                TextColumn::make('engine')
                    ->searchable(),
                TextColumn::make('status')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
<<<<<<< HEAD
=======
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('driver')
                    ->searchable(),
                Tables\Columns\TextColumn::make('host')
                    ->searchable(),
                Tables\Columns\TextColumn::make('port')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('database')
                    ->searchable(),
                Tables\Columns\TextColumn::make('username')
                    ->searchable(),
                Tables\Columns\TextColumn::make('charset')
                    ->searchable(),
                Tables\Columns\TextColumn::make('collation')
                    ->searchable(),
                Tables\Columns\TextColumn::make('prefix')
                    ->searchable(),
                Tables\Columns\IconColumn::make('strict')
                    ->boolean(),
                Tables\Columns\TextColumn::make('engine')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
>>>>>>> 481b350 (.)
=======
>>>>>>> 467a949 (.)
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 467a949 (.)
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
<<<<<<< HEAD
=======
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
>>>>>>> 481b350 (.)
=======
>>>>>>> 467a949 (.)
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 467a949 (.)
            'index' => ListDatabaseConnections::route('/'),
            'create' => CreateDatabaseConnection::route('/create'),
            'view' => ViewDatabaseConnection::route('/{record}'),
            'edit' => EditDatabaseConnection::route('/{record}/edit'),
<<<<<<< HEAD
=======
            'index' => Pages\ListDatabaseConnections::route('/'),
            'create' => Pages\CreateDatabaseConnection::route('/create'),
            'view' => Pages\ViewDatabaseConnection::route('/{record}'),
            'edit' => Pages\EditDatabaseConnection::route('/{record}/edit'),
>>>>>>> 481b350 (.)
=======
>>>>>>> 467a949 (.)
        ];
    }
}
