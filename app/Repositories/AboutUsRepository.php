<?php

namespace App\Repositories;

use App\Models\AboutUs;
use App\Repositories\BaseRepository;

/**
 * Class AboutUsRepository
 * @package App\Repositories
 * @version December 11, 2021, 3:35 pm UTC
*/

class AboutUsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'source_ru',
        'source_kz',
        'source_en',
        'url',
        'published'
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
        return AboutUs::class;
    }
}
