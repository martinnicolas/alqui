<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoInmueble
 * @package App\Models
 * @version March 9, 2018, 9:28 pm UTC
 *
 * @property string descripcion
 */
class TipoInmueble extends Model
{
    use SoftDeletes;

    public $table = 'tipo_inmuebles';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descripcion' => 'required'
    ];

    
}
