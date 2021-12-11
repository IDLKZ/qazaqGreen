<?php

namespace App\Repositories;

use App\Models\Magazine;
use App\Repositories\BaseRepository;

/**
 * Class MagazineRepository
 * @package App\Repositories
 * @version December 7, 2021, 10:52 am UTC
*/

class MagazineRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'slug',
        'title_ru',
        'title_kz',
        'title_en',
        'description_ru',
        'description_kz',
        'description_en',
        'image',
        'file'
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
        return Magazine::class;
    }
}
