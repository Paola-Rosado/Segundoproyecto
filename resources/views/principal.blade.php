<x-header>
</x-header>
<body>
    <div class="content">
        <h1>Cuerpo principal de la pagina</h1>
        <h2>Mensaje</h2>
        <button type="button" class='btn btn-success'>Entrando</button>

        <h2>Listado de Usuarios Registrados</h2>
        <ul>
            @if(isset($listadousuarios))
                    <table id='tablausuarios' class="table table-striped table-bordered">
                        <thead>

                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Calle</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($listadousuarios as $usuario)
                            <tr>
                                <td>{{$usuario->name}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>{{$usuario->telefono}}</td>
                                <td>{{$usuario->calle}}</td>
                                <td><button class='btn btn-primary'onclick="carga_modal
                                ({{$usuario->id}},'{{$usuario->name}}')" data-id="{{$usuario->id}}
                                "data-nombre="{{$usuario->name}}" data-toggle="modal
                                "data-target="#myModal"><span class='fa fa-pencil'></span></button></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                    <p>La variable de listado de usuarios no esta definida</p>
                @endif
            </ul>

    </div>
</body>
<x-footer></x-footer>