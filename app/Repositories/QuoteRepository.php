<?php

namespace App\Repositories;

use App\Models\Quote;
use InfyOm\Generator\Common\BaseRepository;

class QuoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'username',
        'position',
        'quote',
        'ip',
        'isActive'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Quote::class;
    }
}
