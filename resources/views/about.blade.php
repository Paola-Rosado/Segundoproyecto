<x-app-layout>
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-3xl font-bold mb-4">About Page</h1>
        <h2>Hola desde el controlador de PostController</h2>
        <h3>El valor ingresado del parametro es{{$parametro}}</h3>
        <x-alert2 type="warning" class="mb-4">
            <!-- slot es una variable que representa el contenido dentro del componente -->
        <x-slot name="title">Titulo de la alerta</x-slot>
        Este es un mensaje de alerta personalizado.
        </x-alert2>
        <p>Hola mundo</p>
        <!-- Lista de componentes para botones -->
        <x-button type='sucess' id='sucess'>Boton de Inicio</x-button>
        <x-button type='danger' id='danger'>Boton de Danger</x-button>
        <x-button type='warning' id='warning'>Boton de warning</x-button>
    </div>
    <!-- El siguiente fragmento es el uso de directivas basadas en blade -->
    @if(!empty($nombre))
        <h4>El nombre ingresado es {{$nombre}}</h4>
    @endif
</x-app-layout>
