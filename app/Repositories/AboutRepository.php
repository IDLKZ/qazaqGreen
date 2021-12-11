<?php

namespace App\Repositories;

use App\Models\About;
use App\Repositories\BaseRepository;

/**
 * Class AboutRepository
 * @package App\Repositories
 * @version December 7, 2021, 10:48 am UTC
*/

class AboutRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title_ru',
        'title_kz',
        'title_en',
        'description_ru',
        'description_kz',
        'description_en',
        'status'
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
        return About::class;
    }
}
