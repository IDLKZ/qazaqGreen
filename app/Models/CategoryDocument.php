<?php

namespace App\Models;

use App\FileUpload;
use App\Language;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CategoryDocument
 * @package App\Models
 * @version December 7, 2021, 10:53 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $categoryDocuments
 * @property string $title_ru
 * @property string $title_kz
 * @property string $title_en
 */
class CategoryDocument extends Model
{
    //use SoftDeletes;
    use Language;
    use FileUpload;
    use HasFactory;

    public $table = 'categorydocument';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
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
        'title_ru' => 'required|string|max:255',
        'title_kz' => 'nullable|string|max:255',
        'title_en' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function categoryDocuments()
    {
        return $this->hasMany(\App\Models\CategoryDocument::class, 'category_id');
    }
}
