<?php

declare(strict_types=1);

namespace Modules\Setting\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Modules\Setting\Models\Setting;

/**
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
 * @extends Factory<Setting>
=======
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\Setting\Models\Setting>
>>>>>>> 481b350 (.)
=======
 * @extends Factory<Setting>
>>>>>>> 467a949 (.)
=======
 * @extends Factory<Setting>
>>>>>>> 7ce3af5 (.)
 */
class SettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Setting>
     */
    protected $model = Setting::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
        ];
    }
}
