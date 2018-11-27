<?php

namespace App\Repositories;

use App\Models\partners;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class partnersRepository
 * @package App\Repositories
 * @version November 25, 2018, 1:38 pm UTC
 *
 * @method partners findWithoutFail($id, $columns = ['*'])
 * @method partners find($id, $columns = ['*'])
 * @method partners first($columns = ['*'])
*/
class partnersRepository extends BaseRepository
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
        return partners::class;
    }
}
