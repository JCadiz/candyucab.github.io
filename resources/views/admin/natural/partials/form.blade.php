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
