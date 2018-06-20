<div class="form-row">
    <div class="form-group col-md-12 @if($errors->has('nombre')) is-invalid @endif">
        <label for="nombre" ><strong>Nombre Tienda</strong></label>
        <input class="form-control" type="text" name="nombre" id="nombre" value="{{ $tienda->nombre or old('nombre') }}">
        @if($errors->has('nombre'))
            <span>{{ $errors->first('nombre') }}</span>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6 @if($errors->has('tipo')) is-invalid @endif">
        <label for="tipo" ><strong>Valor Actual</strong></label>
        <input class="form-control" type="text" name="tipo" id="tipo" value="{{ $tienda->tipo or old('tipo') }}">
        @if($errors->has('tipo'))
            <span>{{ $errors->first('tipo') }}</span>
        @endif
    </div>
</div>
