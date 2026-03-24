<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Model;

class Pagina extends Model
{
    //
    protected $table='paginas';
    protected function casts(): array
        {
            return [
                'created_at' => 'datetime',
                'is_active'  => 'boolean',
            ];
        }

    protected function name(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                return strtolower($value);
            },
            set: function ($value) {
                return strtolower($value);
            }
        );
    }

    public function ObtenerListado(){
        $listadousuarios=Pagina::all();
        return $listadousuarios;
    }

    public function BuscarId($id){
        $registro=Pagina::find($id);
        return $registro;
    }
}