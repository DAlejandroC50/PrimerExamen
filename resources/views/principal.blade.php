<x-header>
</x-header>
<body>
    <!--Se esta llamando al header.blade.php y footer.blade.php -->
    <div class="content">
        <h1>Cuerpo principal de la página</h1>
        <h2>Mensaje</h2>
        <button type="button" class='btn btn-success'>Entrando</button>

        <h2>Listado de Usuarios Registrados</h2>
        <ul>
            @if(isset($listadousuarios))
                <table id='tablausuarios' class="table table-striped table-bordered">
                    <thread>
                        <tr>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Calle</th>
                                <th>Acciones</th>
                            </tr>
                        </tr>
                    </thread>
                    <tbody>
                    @foreach($listadousuarios as $usuario)
                        <tr>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->email}}</td>
                            <td>{{$usuario->telefono}}</td>
                            <td>{{$usuario->calle}}</td>
                            <td><button class='btn btn-primary' onclick="carga_modal //Nombre de la funcion
                            ({{$usuario->id}},'{{$usuario->name}}')" data_id="{{$usuario->id}}"
                            data-nombre="{{$usuario->name}}" data-toggle="modal"
                            data-target="#myModal"><span class='fa fa-pencil'></span></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <p>La variable de listado de usuarios no está definida</p>
            @endif
        </ul>

    </div>
</body>
<x-footer></x-footer>