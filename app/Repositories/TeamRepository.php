<?php

namespace App\Repositories;

use App\Models\Team;
use InfyOm\Generator\Common\BaseRepository;

class TeamRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'photo',
        'biography',
        'position'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Team::class;
    }
}
