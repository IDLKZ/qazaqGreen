<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class AboutUs
 * @package App\Models
 * @version December 11, 2021, 3:35 pm UTC
 *
 * @property string $source_ru
 * @property string $source_kz
 * @property string $source_en
 * @property string $url
 * @property string $published
 */
class AboutUs extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'about_us';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'source_ru',
        'source_kz',
        'source_en',
        'url',
        'published'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'source_ru' => 'string',
        'source_kz' => 'string',
        'source_en' => 'string',
        'url' => 'string',
        'published' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'source_ru' => 'required|string|max:255',
        'source_kz' => 'nullable|string|max:255',
        'source_en' => 'nullable|string|max:255',
        'url' => 'required|string|max:255',
        'published' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
