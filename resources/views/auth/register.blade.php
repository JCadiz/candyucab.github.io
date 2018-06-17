@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registro</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><strong>Nombre Usuario</strong></label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><strong>Correo Electrónico</strong></label>
                            <div class="col-md-6">
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
                            <div class="form-group col-md-6 @if($errors->has('releaseDate')) is-invalid @endif">
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
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><strong>Contraseña</strong></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1"><strong>Estados</strong></label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                @foreach($lugares as $lugar)
                                    <option>{{ $lugar }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><strong>Confirmar Contraseña</strong></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registro
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
