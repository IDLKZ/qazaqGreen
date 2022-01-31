<?php

namespace App\Models;

use App\FileUpload;
use App\Language;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class PositionTeam
 * @package App\Models
 * @version December 7, 2021, 10:50 am UTC
 *
 * @property \App\Models\Position $position
 * @property \App\Models\Team $team
 * @property integer $position_id
 * @property integer $team_id
 */
class PositionTeam extends Model
{
    //use SoftDeletes;

    use HasFactory;
    use FileUpload;
    use Language;
    public $table = 'position_teams';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'position_id',
        'team_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'position_id' => 'integer',
        'team_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'position_id' => 'required',
        'team_id' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function positionName()
    {
        return $this->belongsTo(\App\Models\Position::class, 'position_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function team()
    {
        return $this->belongsTo(\App\Models\Team::class, 'team_id');
    }
}
