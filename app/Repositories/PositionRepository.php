<?php

namespace App\Repositories;

use App\Models\Position;
use App\Repositories\BaseRepository;

/**
 * Class PositionRepository
 * @package App\Repositories
 * @version December 7, 2021, 10:49 am UTC
*/

class PositionRepository extends BaseRepository
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
        return Position::class;
    }
}
