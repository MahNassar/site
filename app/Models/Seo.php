<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Seo
 * @package App\Models
 * @version May 10, 2017, 9:06 pm UTC
 */
class Seo extends Model
{
    public $table = 'seo';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'meta_description', 'meta_keywords',
        'title', 'android_app_link', 'ios_app_link', 'logo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'meta_description' => 'string',
        'meta_keywords' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
