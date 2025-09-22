<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Pages;

use Filament\Pages\Page;
use Modules\Setting\Actions\DB\DownloadAction;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Webmozart\Assert\Assert;

class BackupMysql extends Page
{
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 467a949 (.)
=======
>>>>>>> 7ce3af5 (.)
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-cog';

    protected static string | \UnitEnum | null $navigationGroup = 'Settings';

    protected string $view = 'setting::filament.pages.backup-mysql';
<<<<<<< HEAD
<<<<<<< HEAD
=======
    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static ?string $navigationGroup = 'Settings';

    protected static string $view = 'setting::filament.pages.backup-mysql';
>>>>>>> 481b350 (.)
=======
>>>>>>> 467a949 (.)
=======
>>>>>>> 7ce3af5 (.)

    public function download(string $connectionName): BinaryFileResponse
    {
        return app(DownloadAction::class)->execute($connectionName);
    }

    // public function mount(): void {
    //     $user = auth()->user();
<<<<<<< HEAD
=======
    //     // @phpstan-ignore-next-line method.nonObject
>>>>>>> 7ce3af5 (.)
    //     if(!$user->hasRole('super-admin')){
    //         redirect('/admin');
    //     }
    // }

    protected function getViewData(): array
    {
        Assert::isArray($connections = config('database.connections'));

<<<<<<< HEAD
        $connections = array_filter($connections, fn ($item): bool => 'mysql' === $item['driver']);
=======
        $connections = array_filter($connections, fn ($item): bool => $item['driver'] === 'mysql');
>>>>>>> 7ce3af5 (.)

        // $connections=collect($connections)->keyBy('database');
        return ['connections' => $connections];
    }
}
