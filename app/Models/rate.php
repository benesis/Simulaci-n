<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class rate
 * @package App\Models
 * @version April 9, 2019, 6:02 am UTC
 *
 * @property string rateType
 * @property integer quantity
 * @property float price
 */
class rate extends Model
{

    public $table = 'rates';
    


    public $fillable = [
        'rateType',
        'quantity',
        'price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'rateType' => 'string',
        'quantity' => 'integer',
        'price' => 'double'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'rateType' => 'request',
        'quantity' => 'request',
        'price' => 'request'
    ];

    
}
