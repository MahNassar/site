<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class clints
 * @package App\Models
 * @version November 25, 2018, 2:25 pm UTC
 *
 * @property string name
 * @property string logo
 */
class clints extends Model
{
    use SoftDeletes;

    public $table = 'clints';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'logo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'logo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'logo' => 'required'
    ];

    
}
