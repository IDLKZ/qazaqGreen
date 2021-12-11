<?php

namespace App\Repositories;

use App\Models\CategoryDocument;
use App\Repositories\BaseRepository;

/**
 * Class CategoryDocumentRepository
 * @package App\Repositories
 * @version December 7, 2021, 10:53 am UTC
*/

class CategoryDocumentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title_ru',
        'title_kz',
        'title_en'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CategoryDocument::class;
    }
}
