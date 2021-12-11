<?php

namespace App\Repositories;

use App\Models\News;
use App\Repositories\BaseRepository;

/**
 * Class NewsRepository
 * @package App\Repositories
 * @version December 7, 2021, 10:51 am UTC
*/

class NewsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'slug',
        'title_ru',
        'title_kz',
        'title_en',
        'subtitle_ru',
        'subtitle_kz',
        'subtitle_en',
        'thumbnail',
        'image',
        'authors',
        'description_ru',
        'description_kz',
        'description_en'
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
        return News::class;
    }
}
