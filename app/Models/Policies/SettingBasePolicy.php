<?php

declare(strict_types=1);

namespace Modules\Setting\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 9bba149 (.)
use Modules\Xot\Datas\XotData;

abstract class SettingBasePolicy
{
    use HandlesAuthorization;

<<<<<<< HEAD
    public function before(ProfileContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')/** @phpstan-ignore method.nonObject */) {
=======
    public function before(UserContract $user, string $ability): ?bool
    {
        $xotData = XotData::make();
        if ($user->hasRole('super-admin')) {
>>>>>>> 9bba149 (.)
            return true;
        }

        return null;
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 9bba149 (.)
