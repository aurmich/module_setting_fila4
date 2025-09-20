<?php

declare(strict_types=1);

namespace Modules\Setting\Models\Policies;

use Modules\Setting\Models\Setting;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 9bba149 (.)

class SettingPolicy extends SettingBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('setting.viewAny'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('setting.viewAny');
>>>>>>> 9bba149 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(ProfileContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.view'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.view');
>>>>>>> 9bba149 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('setting.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('setting.create');
>>>>>>> 9bba149 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(ProfileContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.update'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.update');
>>>>>>> 9bba149 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(ProfileContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.delete'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.delete');
>>>>>>> 9bba149 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(ProfileContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.restore'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.restore');
>>>>>>> 9bba149 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(ProfileContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}
=======
    public function forceDelete(UserContract $user, Setting $setting): bool
    {
        return $user->hasPermissionTo('setting.forceDelete');
    }
}
>>>>>>> 9bba149 (.)
