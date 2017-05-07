<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class About
 * @package App\Models
 * @version May 3, 2017, 10:17 am UTC
 */
class About extends Model
{

    public $table = 'about';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'company_name',
        'company_slogan',
        'company_info',
        'company_mission',
        'company_vission',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company_name' => 'string',
        'company_slogan' => 'string',
        'company_info' => 'string',
        'company_mission' => 'string',
        'company_vission' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
