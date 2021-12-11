<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Contact
 * @package App\Models
 * @version December 7, 2021, 10:54 am UTC
 *
 * @property string $phone_text
 * @property string $email_text
 * @property string $address_text
 * @property string $phone
 * @property string $email
 * @property string $address
 */
class Contact extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'contacts';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'phone_text',
        'email_text',
        'address_text',
        'phone',
        'email',
        'address'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'phone_text' => 'string',
        'email_text' => 'string',
        'address_text' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'address' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'phone_text' => 'nullable|string|max:255',
        'email_text' => 'nullable|string|max:255',
        'address_text' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:500',
        'email' => 'nullable|string|max:500',
        'address' => 'nullable|string|max:500',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
