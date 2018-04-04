<?php

namespace App\Repositories;

use App\Models\TipoInmueble;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoInmuebleRepository
 * @package App\Repositories
 * @version March 9, 2018, 9:28 pm UTC
 *
 * @method TipoInmueble findWithoutFail($id, $columns = ['*'])
 * @method TipoInmueble find($id, $columns = ['*'])
 * @method TipoInmueble first($columns = ['*'])
*/
class TipoInmuebleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descripcion'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TipoInmueble::class;
    }
}
