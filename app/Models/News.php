<?php

namespace App\Models;

use App\FileUpload;
use App\Language;
use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class News
 * @package App\Models
 * @version December 7, 2021, 10:51 am UTC
 *
 * @property string $slug
 * @property string $title_ru
 * @property string $title_kz
 * @property string $title_en
 * @property string $subtitle_ru
 * @property string $subtitle_kz
 * @property string $subtitle_en
 * @property string $thumbnail
 * @property string $image
 * @property string $authors
 * @property string $description_ru
 * @property string $description_kz
 * @property string $description_en
 */
class News extends Model
{
    //use SoftDeletes;

    use HasFactory;
    use FileUpload;
    use Language;
    use Sluggable;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title_ru'
            ]
        ];
    }
    public $table = 'news';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'slug',
        'title_ru',
        'title_kz',
        'title_en',
        'subtitle_ru',
        'subtitle_kz',
        'subtitle_en',
        'thumbnail',
        'image',
        'authors',
        'description_ru',
        'description_kz',
        'description_en'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'slug' => 'string',
        'title_ru' => 'string',
        'title_kz' => 'string',
        'title_en' => 'string',
        'subtitle_ru' => 'string',
        'subtitle_kz' => 'string',
        'subtitle_en' => 'string',
        'thumbnail' => 'string',
        'image' => 'string',
        'authors' => 'string',
        'description_ru' => 'string',
        'description_kz' => 'string',
        'description_en' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'slug' => 'string|max:255',
        'title_ru' => 'required|string|max:500',
        'title_kz' => 'nullable|string|max:500',
        'title_en' => 'nullable|string|max:500',
        'subtitle_ru' => 'required|string|max:500',
        'subtitle_kz' => 'nullable|string|max:500',
        'subtitle_en' => 'nullable|string|max:500',
        'thumbnail' => 'required|file|image|max:100000',
        'image' => 'required|file|image|max:100000',
        'authors' => 'nullable|string|max:500',
        'description_ru' => 'required|string',
        'description_kz' => 'nullable|string',
        'description_en' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
