<?php

namespace App\Models;

use App\FileUpload;
use App\Language;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class About
 * @package App\Models
 * @version December 7, 2021, 10:48 am UTC
 *
 * @property string $title_ru
 * @property string $title_kz
 * @property string $title_en
 * @property string $description_ru
 * @property string $description_kz
 * @property string $description_en
 * @property boolean $status
 */
class About extends Model
{
    //use SoftDeletes;

    use HasFactory;
    use Language;
    use FileUpload;
    public $table = 'abouts';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title_ru',
        'title_kz',
        'title_en',
        'description_ru',
        'description_kz',
        'description_en',
        'status'
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
        'description_ru' => 'string',
        'description_kz' => 'string',
        'description_en' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title_ru' => 'required|string|max:255',
        'title_kz' => 'nullable|string|max:255',
        'title_en' => 'nullable|string|max:255',
        'description_ru' => 'required|string',
        'description_kz' => 'nullable|string',
        'description_en' => 'nullable|string',
        'status' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
