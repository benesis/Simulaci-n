<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class passenger
 * @package App\Models
 * @version April 9, 2019, 6:13 am UTC
 *
 * @property string name
 * @property integer age
 * @property string sex
 */
class passenger extends Model
{

    public $table = 'passengers';
    


    public $fillable = [
        'name',
        'age',
        'sex'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'age' => 'integer',
        'sex' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'request'
    ];

    
}
