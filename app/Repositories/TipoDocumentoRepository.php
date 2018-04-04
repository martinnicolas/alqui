<?php

namespace App\Repositories;

use App\Models\TipoDocumento;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TipoDocumentoRepository
 * @package App\Repositories
 * @version March 17, 2018, 11:10 pm UTC
 *
 * @method TipoDocumento findWithoutFail($id, $columns = ['*'])
 * @method TipoDocumento find($id, $columns = ['*'])
 * @method TipoDocumento first($columns = ['*'])
*/
class TipoDocumentoRepository extends BaseRepository
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
        return TipoDocumento::class;
    }
}
