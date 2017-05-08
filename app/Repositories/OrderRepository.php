<?php

namespace App\Repositories;

use App\Models\Order;
use InfyOm\Generator\Common\BaseRepository;

class OrderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Configure the Model
     **/
    public function model()
    {
        return Order::class;
    }
}
