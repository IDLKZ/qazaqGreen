<?php

namespace App\Models;

use App\FileUpload;
use App\Language;
use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Event
 * @package App\Models
 * @version December 7, 2021, 10:52 am UTC
 *
 * @property string $image
 * @property string $slug
 * @property string $title_ru
 * @property string $title_kz
 * @property string $title_en
 * @property string $subtitle_ru
 * @property string $subtitle_kz
 * @property string $subtitle_en
 * @property string $description_ru
 * @property string $description_kz
 * @property string $description_en
 * @property string $date_start
 * @property string $date_end
 */
class Event extends Model
{
    //use SoftDeletes;
    use Language;
    use FileUpload;
    use Sluggable;
    use HasFactory;

    public $table = 'events';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title_ru'
            ]
        ];
    }
    protected $dates = ['deleted_at'];



    public $fillable = [
        'image',
        'slug',
        'title_ru',
        'title_kz',
        'title_en',
        'subtitle_ru',
        'subtitle_kz',
        'subtitle_en',
        'description_ru',
        'description_kz',
        'description_en',
        'date_start',
        'date_end'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
        'slug' => 'string',
        'title_ru' => 'string',
        'title_kz' => 'string',
        'title_en' => 'string',
        'subtitle_ru' => 'string',
        'subtitle_kz' => 'string',
        'subtitle_en' => 'string',
        'description_ru' => 'string',
        'description_kz' => 'string',
        'description_en' => 'string',
        'date_start' => 'string',
        'date_end' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image' => 'required|string|max:255',
        'slug' => 'string|max:255',
        'title_ru' => 'required|string|max:255',
        'title_kz' => 'nullable|string|max:255',
        'title_en' => 'nullable|string|max:255',
        'subtitle_ru' => 'required|string|max:255',
        'subtitle_kz' => 'nullable|string|max:255',
        'subtitle_en' => 'nullable|string|max:255',
        'description_ru' => 'required|string',
        'description_kz' => 'nullable|string',
        'description_en' => 'nullable|string',
        'date_start' => 'required|string|max:255',
        'date_end' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
