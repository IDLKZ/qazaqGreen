<?php

namespace App\Models;

use App\FileUpload;
use App\Language;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Document
 * @package App\Models
 * @version December 7, 2021, 10:53 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $categoryDocuments
 * @property string $title_ru
 * @property string $title_kz
 * @property string $title_en
 * @property string $file
 */
class Document extends Model
{
    //use SoftDeletes;

    use HasFactory;
    use Language;
    use FileUpload;
    public $table = 'documents';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title_ru',
        'title_kz',
        'title_en',
        'file'
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
        'file' => 'string'
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
        'file' => 'required|file|max:100000',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function categoryDocuments()
    {
        return $this->hasMany(\App\Models\CategoryDocumentRel::class, 'document_id');
    }
}
