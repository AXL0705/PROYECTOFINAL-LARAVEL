<div class="row">
    <div class="col-6 mx-auto">
        <form>
            <div class="form-group">
                <div class="form-group">
                    <label>Seleccionar Usuario</label>
                    <select wire:model="venta.id_usuario" class="form-control">
                        <option selected value="">---------</option>
                        @foreach ($usuarios as $usuario)
                            <option value="{{ $usuario->id }}">{{ $usuario->nombre_usuario }}</option>
                        @endforeach

                    </select>
                    @error('venta.id_usuario') <p>Favor de Seleccionar un Usuario.</p>@enderror
                </div>
                <div class="form-group">
                    <label>Seleccionar Bicicleta</label>

                    <select wire:model="venta.id_bicicleta" class="form-control">
                        <option selected value="">---------</option>
                        @foreach ($bicicletas as $bicicleta)
                            <option value="{{ $bicicleta->id }}">{{ $bicicleta->modelo }}</option>
                        @endforeach

                    </select>
                    @error('venta.id_bicicleta') <p>Favor de Seleccionar una Bicicleta.</p>@enderror
                </div>
        </form>
    </div>
</div>
