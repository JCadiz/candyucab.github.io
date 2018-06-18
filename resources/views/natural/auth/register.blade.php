@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Registro Clientes Naturales</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/natural/register') }}" aria-label="{{ __('Register') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 @if($errors->has('name')) is-invalid @endif">
                                <label for="name"><strong>Nombre Usuario</strong></label>
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 @if($errors->has('email')) is-invalid @endif">
                            <label for="email"><strong>Correo Electrónico</strong></label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 @if($errors->has('Pnombre')) is-invalid @endif">
                                <label for="Pnombre" ><strong>Primer Nombre</strong></label>
                                <input class="form-control" type="text" name="Pnombre" id="Pnombre" value="{{ old('Pnombre') }}">
                                @if($errors->has('Pnombre'))
                                    <span>{{ $errors->first('Pnombre') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 @if($errors->has('Snombre')) is-invalid @endif">
                                <label for="Snombre" ><strong>Segundo Nombre</strong></label>
                                <input class="form-control" type="text" name="Snombre" id="Snombre" value="{{ old('Snombre') }}">
                                @if($errors->has('Snombre'))
                                    <span>{{ $errors->first('Snombre') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 @if($errors->has('Papellido')) is-invalid @endif">
                                <label for="Papellido" ><strong>Primer Apellido</strong></label>
                                <input class="form-control" type="text" name="Papellido" id="Papellido" value="{{ old('Papellido') }}">
                                @if($errors->has('Papellido'))
                                    <span>{{ $errors->first('Papellido') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 @if($errors->has('Sapellido')) is-invalid @endif">
                                <label for="Sapellido" ><strong>Segundo Apellido</strong></label>
                                <input class="form-control" type="text" name="Sapellido" id="Sapellido" value="{{ old('Sapellido') }}">
                                @if($errors->has('Sapellido'))
                                    <span>{{ $errors->first('Sapellido') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 @if($errors->has('rif')) is-invalid @endif">
                                <label for="rif" ><strong>RIF</strong></label>
                                <input class="form-control" type="text" name="rif" id="rif" value="{{ old('rif') }}">
                                @if($errors->has('rif'))
                                    <span>{{ $errors->first('rif') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 @if($errors->has('cedula')) is-invalid @endif">
                                <label for="cedula" ><strong>Cedula</strong></label>
                                <input class="form-control" type="text" name="cedula" id="cedula" value="{{ old('cedula') }}">
                                @if($errors->has('cedula'))
                                    <span>{{ $errors->first('cedula') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="numeroC"><strong>Numero de Tarjeta</strong></label>
                                <input id="numeroC" type="text" class="form-control {{ $errors->has('numeroC') ? ' is-invalid' : '' }}" name="numeroC" required>
                                @if ($errors->has('numeroC'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('numeroC') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nombreC"><strong>Nombre Tarjeta</strong></label>
                                <input id="nombreC" type="text" class="form-control {{ $errors->has('nombreC') ? ' is-invalid' : '' }}" name="nombreC" required>
                                @if ($errors->has('nombreC'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nombreC') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-2">
                                <label for="cv"><strong>Codigo de validación</strong></label>
                                <input id="cv" type="text" class="form-control{{ $errors->has('cv') ? ' is-invalid' : '' }}" name="cv" required>
                                @if ($errors->has('cv'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cv') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-2">
                                <label for="vencimiento"><strong>Fecha Vencimiento</strong></label>
                                <input id="vencimiento" type="date" class="form-control{{ $errors->has('vencimiento') ? ' is-invalid' : '' }}" name="vencimiento" required>
                                @if ($errors->has('vencimiento'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('vencimiento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="estado">Estados</label>
                                <select class="form-control" id="estado" name="estado">
                                @foreach($lugares as $lugar)
                                    @if($lugar->tipo == "Estado")
                                        <option>{{ $lugar->nombre}}</option>
                                    @endif
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="municipio">Municipios</label>
                                <select class="form-control" id="municipios" name="municipio">
                                @foreach($lugares as $luga)
                                    @if($luga->tipo == "Municipio")
                                        <option>{{ $luga->nombre}}</option>
                                    @endif
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="parroquia">Parroquias</label>
                                <select class="form-control" id="parroquia" name="parroquia">
                                @foreach($lugares as $lug)
                                    @if($lug->tipo == "Parroquia")
                                        <option>{{ $lug->nombre}}</option>
                                    @endif
                                @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="password"><strong>Contraseña</strong></label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                Debe ser de minimo 8 a 16 caracteres como maximo
                                </small>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group col-md-4">
                                <label for="password-confirm"><strong>Confirmar Contraseña</strong></label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="numero"><strong>Numero de Teléfono</strong></label>
                                <input id="numero" type="text" class="form-control{{ $errors->has('numero') ? ' is-invalid' : '' }}" name="numero" required>
                                @if ($errors->has('numero'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('numero') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
