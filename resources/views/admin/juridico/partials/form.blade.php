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
