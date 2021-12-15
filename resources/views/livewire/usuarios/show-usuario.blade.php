<div>
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card text-center">
                <div class="card-tittle">
                    <h2>Informacion del usuario</h2>
                </div>
                <div class="card-header">
                    <img style="width:100px; height:125px"
                src="{{ Storage::disk('public')->url($usuario->foto) }}" alt="">
                </div>
                <div class="card-body">
                    <h1>{{ $usuario->nombre_usuario }}</h1>
                    {{ $usuario->email }}
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('editUsuarios', $usuario) }}" type="submit" class="btn btn-success">Editar</a>
                    <a href="{{ route('indexUsuarios') }}" class="btn btn-danger">Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
