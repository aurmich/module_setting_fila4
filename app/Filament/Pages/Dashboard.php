<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Pages;

<<<<<<< HEAD
use Modules\Xot\Filament\Pages\XotBaseDashboard;
use Illuminate\Support\Facades\Process as LaravelProcess;

class Dashboard extends XotBaseDashboard
=======
use Filament\Pages\Page;
use Illuminate\Support\Facades\Process as LaravelProcess;

class Dashboard extends Page
>>>>>>> 9bba149 (.)
{
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-document-text';

    protected string $view = 'setting::filament.pages.dashboard';

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
    //     // @phpstan-ignore-next-line method.nonObject
=======
>>>>>>> 9bba149 (.)
    //     if(!$user->hasRole('super-admin')){
    //         redirect('/admin');
    //     }
    // }
}
