<?php

namespace App\Repositories;

use App\Models\Pizza;
use App\Repositories\BaseRepository;

/**
 * Class PizzaRepository
 * @package App\Repositories
 * @version May 20, 2020, 1:06 am UTC
*/

class PizzaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'image',
        'price',
        'description',
        'variations',
        'trad_toppings'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pizza::class;
    }
}
