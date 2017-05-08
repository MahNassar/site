<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Slider
 * @package App\Models
 * @version May 3, 2017, 4:05 pm UTC
 */
class Slider extends Model
{
    public $table = 'sliders';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'abstract',
        'image',
        'isActive'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'abstract' => 'string',
        'image' => 'string',
        'isActive' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
