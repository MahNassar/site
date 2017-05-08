<?php

namespace App\Repositories;

use App\Models\Service;
use InfyOm\Generator\Common\BaseRepository;

class ServiceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'title',
        'abstract',
        'description',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Service::class;
    }
}
