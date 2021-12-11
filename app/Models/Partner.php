<?php

namespace App\Models;

use App\FileUpload;
use App\Language;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Partner
 * @package App\Models
 * @version December 7, 2021, 10:48 am UTC
 *
 * @property string $title_ru
 * @property string $title_kz
 * @property string $title_en
 * @property string $image
 * @property string $url
 */
class Partner extends Model
{
    //use SoftDeletes;

    use HasFactory;
    use FileUpload;
    use Language;
    public $table = 'partners';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title_ru',
        'title_kz',
        'title_en',
        'image',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title_ru' => 'string',
        'title_kz' => 'string',
        'title_en' => 'string',
        'image' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title_ru' => 'required|string|max:500',
        'title_kz' => 'nullable|string|max:500',
        'title_en' => 'nullable|string|max:500',
        'image' => 'required|file|image|max:100000',
        'url' => 'nullable|string|url|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
