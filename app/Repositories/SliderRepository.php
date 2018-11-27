<?php

namespace App\Repositories;

use App\Models\Slider;
use InfyOm\Generator\Common\BaseRepository;

class SliderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'abstract',
        'image',
        'isActive'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Slider::class;
    }
}
