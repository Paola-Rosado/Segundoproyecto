<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pagina extends Model
{
    //
    protected $table='paginas';

        protected $casts = [
        'created_at' => 'datetime',
        'is_active' => 'boolean'
    ];

    public function ObtenerListado(){
        $listadousuarios=Pagina::all();
        return $listadousuarios;
    }

    

    public function BuscarId($id){
        $registro=Pagina::find($id);
        return $registro;
    }
}