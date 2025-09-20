<?php

declare(strict_types=1);

namespace Modules\Setting\Models\Policies;

use Modules\Setting\Models\DatabaseConnection;
<<<<<<< HEAD
use Modules\Xot\Contracts\ProfileContract;
=======
use Modules\Xot\Contracts\UserContract;
>>>>>>> 9bba149 (.)

class DatabaseConnectionPolicy extends SettingBasePolicy
{
    /**
     * Determine whether the user can view any models.
     */
<<<<<<< HEAD
    public function viewAny(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('database_connection.viewAny'); /** @phpstan-ignore method.nonObject */
=======
    public function viewAny(UserContract $user): bool
    {
        return $user->hasPermissionTo('database_connection.viewAny');
>>>>>>> 9bba149 (.)
    }

    /**
     * Determine whether the user can view the model.
     */
<<<<<<< HEAD
    public function view(ProfileContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.view'); /** @phpstan-ignore method.nonObject */
=======
    public function view(UserContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.view');
>>>>>>> 9bba149 (.)
    }

    /**
     * Determine whether the user can create models.
     */
<<<<<<< HEAD
    public function create(ProfileContract $user): bool
    {
        return $user->hasPermissionTo('database_connection.create'); /** @phpstan-ignore method.nonObject */
=======
    public function create(UserContract $user): bool
    {
        return $user->hasPermissionTo('database_connection.create');
>>>>>>> 9bba149 (.)
    }

    /**
     * Determine whether the user can update the model.
     */
<<<<<<< HEAD
    public function update(ProfileContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.update'); /** @phpstan-ignore method.nonObject */
=======
    public function update(UserContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.update');
>>>>>>> 9bba149 (.)
    }

    /**
     * Determine whether the user can delete the model.
     */
<<<<<<< HEAD
    public function delete(ProfileContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.delete'); /** @phpstan-ignore method.nonObject */
=======
    public function delete(UserContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.delete');
>>>>>>> 9bba149 (.)
    }

    /**
     * Determine whether the user can restore the model.
     */
<<<<<<< HEAD
    public function restore(ProfileContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.restore'); /** @phpstan-ignore method.nonObject */
=======
    public function restore(UserContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.restore');
>>>>>>> 9bba149 (.)
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
<<<<<<< HEAD
    public function forceDelete(ProfileContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.forceDelete'); /** @phpstan-ignore method.nonObject */
    }
}
=======
    public function forceDelete(UserContract $user, DatabaseConnection $database_connection): bool
    {
        return $user->hasPermissionTo('database_connection.forceDelete');
    }
}
>>>>>>> 9bba149 (.)
