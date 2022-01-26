<?php

namespace App\Models;

use App\FileUpload;
use App\Language;
use Cviebrock\EloquentSluggable\Sluggable;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Team
 * @package App\Models
 * @version December 7, 2021, 10:50 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $positionTeams
 * @property string $slug
 * @property string $name
 * @property string $position
 * @property string $image
 * @property string $about
 * @property string $instagram
 * @property string $facebook
 * @property string $vk
 * @property string $linkedin
 * @property string $twitter
 * @property string $email
 * @property string $website
 */
class Team extends Model
{
    //use SoftDeletes;
    use Sluggable;
    use HasFactory;
    use Language;
    use FileUpload;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name_ru'
            ]
        ];
    }
    public $table = 'teams';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'slug',
        'name_kz',
        'name_ru',
        'name_en',
        'position_kz',
        'position_ru',
        'position_en',
        'image',
        'about',
        'instagram',
        'facebook',
        'vk',
        'linkedin',
        'twitter',
        'email',
        'website'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'slug' => 'string',
        'name' => 'string',
        'position' => 'string',
        'image' => 'string',
        'about' => 'string',
        'instagram' => 'string',
        'facebook' => 'string',
        'vk' => 'string',
        'linkedin' => 'string',
        'twitter' => 'string',
        'email' => 'string',
        'website' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'slug' => 'nullable|string|max:255',
        'name_kz' => 'required|string|max:255',
        'name_ru' => 'required|string|max:255',
        'name_en' => 'required|string|max:255',
        'position_kz' => 'required|string|max:500',
        'position_ru' => 'required|string|max:500',
        'position_en' => 'required|string|max:500',
        'image' => 'required|image|file|max:100000',
        'about' => 'nullable|string',
        'instagram' => 'nullable|string|max:500',
        'facebook' => 'nullable|string|max:500',
        'vk' => 'nullable|string|max:500',
        'linkedin' => 'nullable|string|max:500',
        'twitter' => 'nullable|string|max:500',
        'email' => 'nullable|string|max:500',
        'website' => 'nullable|string|max:500',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function positionTeams()
    {
        return $this->hasMany(\App\Models\PositionTeam::class, 'team_id');
    }
}
