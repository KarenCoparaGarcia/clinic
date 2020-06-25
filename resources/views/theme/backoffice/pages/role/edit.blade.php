@extends('theme.backoffice.layouts.admin')

@section('title','Editar Role: ' . $role->name)

@section('head');
@endsection

@section('content')
	<div class="section">
		<p class="caption">Edicion del rol: {{$role->name}}</p>
		<div class="divider"></div>
		<div id="basic-form" class="section">
			<div class="row">
				<div class="col s12 m8 offset-m2">
					<div class="card-panel">
						<h4 class="header2">Editar Rol</h4>
						<div class="row">
							<form class="col s12" method="post" action="{{route('backoffice.role.update',$role)}}">
								{{csrf_field()}}
								{{method_field('PUT')}}
								<div class="row">
									<div class="input-field col s12">
										<input id="name" type="text" name="name" value="{{$role->name}}">
										<label for="name">Nombre del Rol</label>
						                @error('name')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong style="color: red">{{ $message }}</strong>
		                                    </span>
		                                @enderror
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<textarea id="description" class="materialize-textarea" name="description">{{$role->description}}</textarea>
										<label for="description">Descripcion del Rol</label>
		                                @error('description')
		                                    <span class="invalid-feedback" role="alert">
		                                        <strong>{{ $message }}</strong>
		                                    </span>
		                                @enderror
									</div>
									<div class="row">
										<div class="input-field col s12">
											<button class="btn waves-effect waves-light right" type="submit" name="action">Actualizar
												<i class="material-icons right">send</i>
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('foot')
@endsection