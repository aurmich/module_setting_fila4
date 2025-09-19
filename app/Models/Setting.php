<?php

declare(strict_types=1);

namespace Modules\Setting\Models;

<<<<<<< HEAD
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Modules\Media\Models\Media;
use Modules\Setting\Database\Factories\SettingFactory;
use Illuminate\Database\Eloquent\Builder;
use Modules\Xot\Contracts\ProfileContract;
use Illuminate\Database\Eloquent\Collection;
use Closure;
use Illuminate\Contracts\Database\Query\Expression;
=======
>>>>>>> 60ebf14 (.)
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @property int $id
 * @property string $group
 * @property string $name
 * @property int $locked
 * @property string $payload
<<<<<<< HEAD
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property MediaCollection<int, Media> $media
 * @property int|null $media_count
 *
 * @method static SettingFactory factory($count = null, $state = [])
 * @method static Builder|Setting newModelQuery()
 * @method static Builder|Setting newQuery()
 * @method static Builder|Setting query()
 * @method static Builder|Setting whereCreatedAt($value)
 * @method static Builder|Setting whereGroup($value)
 * @method static Builder|Setting whereId($value)
 * @method static Builder|Setting whereLocked($value)
 * @method static Builder|Setting whereName($value)
 * @method static Builder|Setting wherePayload($value)
 * @method static Builder|Setting whereUpdatedAt($value)
 *
 * @property ProfileContract|null $creator
 * @property ProfileContract|null $updater
 *
 * @method static Setting|null first()
 * @method static Collection<int, Setting> get()
 * @method static Setting create(array $attributes = [])
 * @method static Setting firstOrCreate(array $attributes = [], array $values = [])
 * @method static Builder<static>|Setting where((string|Closure) $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static Builder<static>|Setting whereNotNull((string|Expression) $columns)
 * @method static int count(string $columns = '*')
 *
=======
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property int|null $media_count
 * @method static \Modules\Setting\Database\Factories\SettingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereLocked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
 * @method static Setting|null first()
 * @method static \Illuminate\Database\Eloquent\Collection<int, Setting> get()
 * @method static Setting create(array $attributes = [])
 * @method static Setting firstOrCreate(array $attributes = [], array $values = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting where(string|\Closure $column, mixed $operator = null, mixed $value = null, string $boolean = 'and')
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Setting whereNotNull(string|\Illuminate\Contracts\Database\Query\Expression $columns)
 * @method static int count(string $columns = '*')
>>>>>>> 60ebf14 (.)
 * @mixin \Eloquent
 */
class Setting extends BaseModel implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [''];

    // use HasUuids;
}
