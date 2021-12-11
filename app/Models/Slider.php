<?php

namespace App\Models;

use App\FileUpload;
use App\Language;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Slider
 * @package App\Models
 * @version December 7, 2021, 10:46 am UTC
 *
 * @property string $image
 * @property string $title_ru
 * @property string $title_kz
 * @property string $title_en
 * @property string $description_ru
 * @property string $description_kz
 * @property string $description_en
 * @property integer $order
 */
class Slider extends Model
{
    //use SoftDeletes;

    use HasFactory;
    use FileUpload;
    use Language;
    public $table = 'sliders';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'image',
        'title_ru',
        'title_kz',
        'title_en',
        'description_ru',
        'description_kz',
        'description_en',
        'order'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'image' => 'string',
        'title_ru' => 'string',
        'title_kz' => 'string',
        'title_en' => 'string',
        'description_ru' => 'string',
        'description_kz' => 'string',
        'description_en' => 'string',
        'order' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'image' => 'required|file|image|max:100000',
        'title_ru' => 'required|string|max:255',
        'title_kz' => 'nullable|string|max:255',
        'title_en' => 'nullable|string|max:255',
        'description_ru' => 'required|string',
        'description_kz' => 'nullable|string',
        'description_en' => 'nullable|string',
        'order' => 'required|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
