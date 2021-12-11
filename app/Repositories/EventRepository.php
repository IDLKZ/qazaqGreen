<?php

namespace App\Repositories;

use App\Models\Event;
use App\Repositories\BaseRepository;

/**
 * Class EventRepository
 * @package App\Repositories
 * @version December 7, 2021, 10:52 am UTC
*/

class EventRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image',
        'slug',
        'title_ru',
        'title_kz',
        'title_en',
        'subtitle_ru',
        'subtitle_kz',
        'subtitle_en',
        'description_ru',
        'description_kz',
        'description_en',
        'date_start',
        'date_end'
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
        return Event::class;
    }
}
