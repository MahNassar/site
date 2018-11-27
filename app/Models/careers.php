<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class careers
 * @package App\Models
 * @version November 26, 2018, 8:31 am UTC
 *
 * @property string title
 * @property string description
 * @property string image
 */
class careers extends Model
{
    use SoftDeletes;

    public $table = 'careers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'description',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'description' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'description' => 'required',
        'image' => 'required'
    ];

    
}
