<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Product
 * @package App\Models
 * @version May 3, 2017, 10:50 am UTC
 */
class Product extends Model
{

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
    public $table = 'products';
    public $fillable = [
        'title',
        'abstract',
        'description',
        'size',
        'area',
        'images'
    ];
    protected $dates = ['deleted_at'];
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'abstract' => 'string',
        'description' => 'string',
        'size' => 'string',
        'area' => 'string',
        'images' => 'string'
    ];


}
