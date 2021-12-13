<?php

namespace App\Models;

use App\Language;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Task
 * @package App\Models
 * @version December 7, 2021, 10:47 am UTC
 *
 * @property integer $order
 * @property string $title_ru
 * @property string $title_kz
 * @property string $title_en
 */
class Task extends Model
{
    //use SoftDeletes;

    use HasFactory;
    use Language;
    public $table = 'tasks';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'order',
        'title_ru',
        'title_kz',
        'title_en'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'order' => 'integer',
        'title_ru' => 'string',
        'title_kz' => 'string',
        'title_en' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'order' => 'required|integer',
        'title_ru' => 'required|string|max:500',
        'title_kz' => 'nullable|string|max:500',
        'title_en' => 'nullable|string|max:500',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
