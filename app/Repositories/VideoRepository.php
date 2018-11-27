<?php

namespace App\Repositories;

use App\Models\Video;
use InfyOm\Generator\Common\BaseRepository;

class VideoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'abstract',
        'url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Video::class;
    }
}
