<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Order
 * @package App\Models
 * @version May 3, 2017, 3:58 pm UTC
 */
class Order extends Model
{
    public $table = 'orders';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'phone',
        'mobile',
        'email',
        'item_name',
        'quantity',
        'item_size',
        'notes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'phone' => 'string',
        'mobile' => 'string',
        'email' => 'string',
        'item_name' => 'string',
        'quantity' => 'string',
        'item_size' => 'string',
        'notes' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
