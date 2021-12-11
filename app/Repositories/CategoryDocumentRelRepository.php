<?php

namespace App\Repositories;

use App\Models\CategoryDocumentRel;
use App\Repositories\BaseRepository;

/**
 * Class CategoryDocumentRelRepository
 * @package App\Repositories
 * @version December 7, 2021, 10:54 am UTC
*/

class CategoryDocumentRelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'category_id',
        'document_id'
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
        return CategoryDocumentRel::class;
    }
}
