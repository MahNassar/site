<?php

namespace App\Repositories;

use App\Models\About;
use InfyOm\Generator\Common\BaseRepository;

class AboutRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'company_name',
        'company_slogan',
        'company_info',
        'company_mission',
        'company_vission',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return About::class;
    }
}
