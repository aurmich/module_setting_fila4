<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Pages;

<<<<<<< HEAD
use Filament\Pages\Page;
use Illuminate\Support\Facades\Process as LaravelProcess;

class Dashboard extends Page
{
<<<<<<< HEAD
<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-document-text';

    protected string $view = 'setting::filament.pages.dashboard';
=======
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'setting::filament.pages.dashboard';
>>>>>>> 481b350 (.)
=======
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-document-text';

    protected string $view = 'setting::filament.pages.dashboard';
>>>>>>> 467a949 (.)
=======
use Modules\Xot\Filament\Pages\XotBaseDashboard;
use Illuminate\Support\Facades\Process as LaravelProcess;

class Dashboard extends XotBaseDashboard
{
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-document-text';

    protected string $view = 'setting::filament.pages.dashboard';
>>>>>>> 7ce3af5 (.)

    public function upgrade(): void
    {
        $command = 'php artisan filament:upgrade';

        LaravelProcess::run($command);
    }

    protected function getViewData(): array
    {
        return ['a' => 'b'];
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
}
