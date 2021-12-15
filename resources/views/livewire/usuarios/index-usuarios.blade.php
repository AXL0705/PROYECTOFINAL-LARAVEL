<div wire:init="cargando">

    <div class="row mb-3">
        <div class="col-3">
            <div class="input-group">
                <span class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..."
                    aria-labaria-describedby="addon-wrapping">
            </div>
        </div>
        <div class="col-9 ">
            <a href="{{route('createUsuarios')}}" class="btn btn-success float-right">Nuevo <i
                    class="fas fa-plus-square"></i></a>
        </div>
    </div>
    @if (count($usuarios) > 0)

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <th scope="row">{{ $usuario->id }}</th>
                        <td><img style="width: 50px; height:50px"
                                src="{{ Storage::disk('public')->url($usuario->foto != null ? $usuario->foto : 'images/usuarios/default.png') }}"
                                alt=""></td>
                        <td>{{ $usuario->nombre_usuario }}</td>
                        <td>{{ $usuario->email }}</td>
                        <td>
                            <a title="Ver usuario" style="font-size: 1.3rem" class="text-info mr-1"
                                href="{{route('showUsuarios', $usuario)}}"><i class="fas fa-eye"></i></a>
                            <a title="Editar usuario" style="font-size: 1.3rem" class="text-warning mr-1"
                                href="{{route('editUsuarios', $usuario) }}"><i class="fas fa-edit"></i></a>
                            <a wire:click="delete" title=" Eliminar usuario" style="font-size: 1.3rem"
                                class="text-danger mr-1" href="{{route('deleteUsuarios', $usuario)}}"><i
                                    class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else
        <img class="d-block mx-auto" src="{{ Storage::disk('public')->url('images/otros/loading.gif') }}" alt="">

        <h2 class="text-center">Cargando...</h2>
    @endif
</div>

