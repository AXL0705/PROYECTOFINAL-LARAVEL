<div>
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card text-center">
                <div class="card-tittle">
                    <h2>Informacion del bicicleta</h2>
                </div>
                <div class="card-header">
                    <img style="width:100px; height:125px"
                src="{{ Storage::disk('public')->url($bicicleta->foto) }}" alt="">
                </div>
                <div class="card-body">
                    <h1>{{ $bicicleta->marca }}</h1>
                    {{ $bicicleta->modelo }} , {{ $bicicleta->año }}
                    <h2 class="mt-5">{{ $bicicleta->precio }}€</h2>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('editBicicletas', $bicicleta) }}" type="submit" class="btn btn-success">Editar</a>
                    <a href="{{ route('indexBicicletas') }}" class="btn btn-danger">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
