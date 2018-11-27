<?php

namespace App\Repositories;

use App\Models\Seo;
use InfyOm\Generator\Common\BaseRepository;

class SeoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'meta_description',
        'meta_keywords'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Seo::class;
    }
}
