<?php

namespace App\Repositories;

use App\Models\clints;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class clintsRepository
 * @package App\Repositories
 * @version November 25, 2018, 2:25 pm UTC
 *
 * @method clints findWithoutFail($id, $columns = ['*'])
 * @method clints find($id, $columns = ['*'])
 * @method clints first($columns = ['*'])
*/
class clintsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'logo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return clints::class;
    }
}
