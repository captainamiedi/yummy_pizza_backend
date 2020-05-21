<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pizza
 * @package App\Models
 * @version May 20, 2020, 1:06 am UTC
 *
 * @property string $title
 * @property string $image
 * @property string $price
 * @property string $description
 * @property string $variations
 * @property string $trad_toppings
 */
class Pizza extends Model
{
    use SoftDeletes;

    public $table = 'pizzas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $appends = ['in_cart', 'count', 'total'];

    public $fillable = [
        'title',
        'image',
        'price',
        'description',
        'variations',
        'trad_toppings'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'image' => 'string',
        'price' => 'integer',
        'description' => 'string',
        'variations' => 'string',
        'trad_toppings' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'image' => 'required',
        'price' => 'required',
        'description' => 'required',
        'trad_toppings' => 'required'
    ];

    public function getInCartAttribute()
    {
        return $this->attributes['inCart'] = false;
    }
    public function getCountAttribute()
    {
        return $this->attributes['count'] = 0;
    }
    public function getTotalAttribute()
    {
        return $this->attributes['total'] = 0;
    }
}
