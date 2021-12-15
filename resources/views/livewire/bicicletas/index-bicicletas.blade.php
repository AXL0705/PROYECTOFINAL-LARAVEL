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
            <a href="{{ route('createBicicletas') }}" class="btn btn-success float-right">Nuevo <i
                    class="fas fa-plus-square"></i></a>
        </div>
    </div>
    @if (count($bicicletas) > 0)

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Año</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bicicletas as $bicicleta)


                    <tr>
                        <th scope="row">{{ $bicicleta->id }}</th>
                        <td><img style="width: 50px; height:70px"
                                src="{{ Storage::disk('public')->url($bicicleta->foto != null ? $bicicleta->foto : 'images/bicicletas/default.png') }}"
                                alt=""></td>
                        <td>{{ $bicicleta->marca }}</td>
                        <td>{{ $bicicleta->modelo }}</td>
                        <td>{{ $bicicleta->año }}</td>
                        <td>{{ $bicicleta->precio }}€</td>
                        <td>
                            <a title="Ver bicicleta" style="font-size: 1.3rem" class="text-info mr-1"
                                href="{{ route('showBicicletas', $bicicleta) }}"><i class="fas fa-eye"></i></a>
                            <a title="Editar bicicleta" style="font-size: 1.3rem" class="text-warning mr-1"
                                href="{{ route('editBicicletas', $bicicleta) }}"><i class="fas fa-edit"></i></a>
                            <a wire:click="delete" title=" Eliminar bicicleta" style="font-size: 1.3rem"
                                class="text-danger mr-1" href="{{ route('deleteBicicletas', $bicicleta) }}"><i
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
