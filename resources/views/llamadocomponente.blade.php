<x-app-layout>
    <div class="max-w-4xl mx-auto p-10">
        <h3>Esto es lo que contiene el componente dentro y se lee como parte de la 
        estructura o contenido del slot</h3>
        <x-button type='warning' id='ir'>Ir a la página principal del proyecto</x-button>
        <x-button type='success' id='success'>Botón de inicio</x-button>
        <x-alert type='Danger' title='Ejemplo de boton' id="alerta">"Mensaje de alert"
        </x-alert>
        <x-Alert2 type="danger" class="mb-4" title="parametro de titulo">
            Acceso al segundo alert de tipo clase
        </x-Alert2>
    </div>
</x-app-layout>