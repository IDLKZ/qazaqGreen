<?php

namespace App\Models;

use App\FileUpload;
use App\Language;
use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Magazine
 * @package App\Models
 * @version December 7, 2021, 10:52 am UTC
 *
 * @property string $slug
 * @property string $title_ru
 * @property string $title_kz
 * @property string $title_en
 * @property string $description_ru
 * @property string $description_kz
 * @property string $description_en
 * @property string $image
 * @property string $file
 */
class Magazine extends Model
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

    public $table = 'magazines';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'slug',
        'title_ru',
        'title_kz',
        'title_en',
        'description_ru',
        'description_kz',
        'description_en',
        'image',
        'file'
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
        'description_ru' => 'string',
        'description_kz' => 'string',
        'description_en' => 'string',
        'image' => 'string',
        'file' => 'string'
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
        'description_ru' => 'required|string',
        'description_kz' => 'nullable|string',
        'description_en' => 'nullable|string',
        'image' => 'required|image|max:1000000',
        'file' => 'required|file|max:1000000',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
