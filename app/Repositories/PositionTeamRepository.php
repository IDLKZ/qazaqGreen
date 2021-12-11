<?php

namespace App\Repositories;

use App\Models\PositionTeam;
use App\Repositories\BaseRepository;

/**
 * Class PositionTeamRepository
 * @package App\Repositories
 * @version December 7, 2021, 10:50 am UTC
*/

class PositionTeamRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'position_id',
        'team_id'
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
        return PositionTeam::class;
    }
}
