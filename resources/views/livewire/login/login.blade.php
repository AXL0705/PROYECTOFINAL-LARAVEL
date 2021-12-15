<div class="mt-5">
    <link rel="stylesheet" href="<?php echo asset('css/login.css')?>" type="text/css">
    <div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="https://w7.pngwing.com/pngs/178/595/png-transparent-user-profile-computer-icons-login-user-avatars.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form wire:submit.prevent = "login">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input wire:model = "email" autocomplete="off"  type="email" name="" class="form-control input_user" value="" placeholder="Correo Electronico">

                        </div>
                        <div class="mx-0">
                            @error('email') <b class="text-danger">{{$message}}</b> @enderror
                        </div>


						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input autocomplete="off" wire:model = "password" type="password" name="" class="form-control input_pass" value="" placeholder="Contraseña">

                        </div>
                        <div class="mx-0">
                            @error('password') <b class="text-danger">{{$message}}</b> @enderror
                        </div>

						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Recuerdame</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" class="btn login_btn">Login</button>
				   </div>
					</form>
				</div>

				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						¿No Tienes una Cuenta? <a href="{{route('createUsuarios')}}" class="ml-2">->Registrar</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#" wire:click = "proximamente" >¿Olvidaste tu contraseña?</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
