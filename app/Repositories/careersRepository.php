<?php

namespace App\Repositories;

use App\Models\careers;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class careersRepository
 * @package App\Repositories
 * @version November 26, 2018, 8:31 am UTC
 *
 * @method careers findWithoutFail($id, $columns = ['*'])
 * @method careers find($id, $columns = ['*'])
 * @method careers first($columns = ['*'])
*/
class careersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return careers::class;
    }
}
