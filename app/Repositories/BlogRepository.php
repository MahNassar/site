<?php

namespace App\Repositories;

use App\Models\Blog;
use InfyOm\Generator\Common\BaseRepository;

class BlogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'abstract',
        'topic',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Blog::class;
    }
}
