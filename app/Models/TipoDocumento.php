<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class TipoDocumento
 * @package App\Models
 * @version March 17, 2018, 11:10 pm UTC
 *
 * @property string descripcion
 */
class TipoDocumento extends Model
{
    use SoftDeletes;

    public $table = 'tipo_documentos';
    

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
