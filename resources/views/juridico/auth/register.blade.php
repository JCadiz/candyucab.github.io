@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Registro Clientes Naturales</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/juridico/register') }}" aria-label="{{ __('Register') }}">
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
                            <div class="form-group col-md-6 @if($errors->has('paginaWeb')) is-invalid @endif">
                                <label for="paginaWeb" ><strong>Pagina Web</strong></label>
                                <input class="form-control" type="web" name="paginaWeb" id="paginaWeb" value="{{ old('paginaWeb') }}">
                                @if($errors->has('paginaWeb'))
                                    <span>{{ $errors->first('paginaWeb') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 @if($errors->has('capital')) is-invalid @endif">
                                <label for="capital" ><strong>Razón Social</strong></label>
                                <input class="form-control" type="text" name="capital" id="capital" value="{{ old('capital') }}">
                                @if($errors->has('capital'))
                                    <span>{{ $errors->first('capital') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6 @if($errors->has('denominacion')) is-invalid @endif">
                                <label for="denominacion" ><strong>Denominación Comercial</strong></label>
                                <input class="form-control" type="text" name="denominacion" id="denominacion" value="{{ old('denominacion') }}">
                                @if($errors->has('denominacion'))
                                    <span>{{ $errors->first('denominacion') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-6 @if($errors->has('razonSocial')) is-invalid @endif">
                                <label for="razonSocial" ><strong>Razón Social</strong></label>
                                <input class="form-control" type="text" name="razonSocial" id="razonSocial" value="{{ old('razonSocial') }}">
                                @if($errors->has('razonSocial'))
                                    <span>{{ $errors->first('razonSocial') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4 @if($errors->has('nombre')) is-invalid @endif">
                                <label for="rif" ><strong>Nombre Persona Contacto</strong></label>
                                <input class="form-control" type="text" name="nombre" id="nombre" value="{{ old('nombre') }}">
                                @if($errors->has('nombre'))
                                    <span>{{ $errors->first('nombre') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-4 @if($errors->has('apellido')) is-invalid @endif">
                                <label for="apellido" ><strong>Apellido Persona Contacto</strong></label>
                                <input class="form-control" type="text" name="apellido" id="apellido" value="{{ old('apellido') }}">
                                @if($errors->has('apellido'))
                                    <span>{{ $errors->first('apellido') }}</span>
                                @endif
                            </div>
                            <div class="form-group col-md-4 @if($errors->has('cedula')) is-invalid @endif">
                                <label for="cedula" ><strong>Cedula Persona Contacto</strong></label>
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
