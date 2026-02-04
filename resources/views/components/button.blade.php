<div>
    <?php //Se recibe dos atributos los cuales son: $type y el $slot, este ultimo es el texto que va dentro del boton ?>
    <button type='button' {{$attributes->merge(['class'=>'mb-3 btn btn-'.$type])}}>{{$slot}} 
    </button>
    {{$attributes}}
    {{$type}}
</div>