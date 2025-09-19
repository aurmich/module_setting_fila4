<?php

declare(strict_types=1);

namespace Modules\Setting\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Facades\Process as LaravelProcess;

class Dashboard extends Page
{
<<<<<<< HEAD
    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-document-text';

    protected string $view = 'setting::filament.pages.dashboard';
=======
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'setting::filament.pages.dashboard';
>>>>>>> 60ebf14 (.)

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
    //     if(!$user->hasRole('super-admin')/** @phpstan-ignore method.nonObject */){
=======
    //     // @phpstan-ignore-next-line method.nonObject
    //     if(!$user->hasRole('super-admin')){
>>>>>>> 60ebf14 (.)
    //         redirect('/admin');
    //     }
    // }
}
