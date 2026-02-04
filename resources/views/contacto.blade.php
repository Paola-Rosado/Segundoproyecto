@extends('layout.app')
<!--En la linea anterior hago la referencia a la plantilla -->
<!--Si el contenido abarca mas de una linea se puede utilizar la siguiente estructura, caso  contrario se puede utilizar la misma directiva de section pasando como segundo parametro el
nombre del titulo-->
@section('title','Laravel 12 | Contacto')

@push('css')
    <style>
        body{
            background-color: #f3f3f3;

        }
        </style>
@endpush
@push('css')
        <style>
            h1{
                color:red;
            }
            </style>
@endpush

@section('content')
            <div class="max-w-4xl mx-auto px-4">
                <h1> Entrando a la seccion de contacto</h1>
                <p>Aqui va el conteniudo del conntacto</p>
                <p><?=$mensaje?></p>
                <p>{{$mensaje}}</p>
            </div>
@endsection