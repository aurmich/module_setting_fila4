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
=======
>>>>>>> 481b350 (.)
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @property int                                                                                                        $id
 * @property string                                                                                                     $group
 * @property string                                                                                                     $name
 * @property int                                                                                                        $locked
 * @property string                                                                                                     $payload
<<<<<<< HEAD
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property MediaCollection<int, Media> $media
 * @property int|null                                                                                                   $media_count
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
=======
 * @property \Illuminate\Support\Carbon|null                                                                            $created_at
 * @property \Illuminate\Support\Carbon|null                                                                            $updated_at
 * @property \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Modules\Media\Models\Media> $media
 * @property int|null                                                                                                   $media_count
 *
 * @method static \Modules\Setting\Database\Factories\SettingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      whereLocked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting      whereUpdatedAt($value)
 *
 * @property \Modules\Xot\Contracts\ProfileContract|null $creator
 * @property \Modules\Xot\Contracts\ProfileContract|null $updater
>>>>>>> 481b350 (.)
 *
 * @mixin \Eloquent
 */
class Setting extends BaseModel implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [''];

    // use HasUuids;
}
