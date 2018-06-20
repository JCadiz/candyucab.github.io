<div class="form-row">
    <div class="form-group col-md-12 @if($errors->has('cantidad')) is-invalid @endif">
        <label for="cantidad" ><strong>Cantidad de candy points</strong></label>
        <input class="form-control" type="number" name="cantidad" id="cantidad" value="{{ $candy->cantidad or old('cantidad') }}">
        @if($errors->has('cantidad'))
            <span>{{ $errors->first('cantidad') }}</span>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6 @if($errors->has('valorActual')) is-invalid @endif">
        <label for="valorActual" ><strong>Valor Actual</strong></label>
        <input class="form-control" type="text" name="valorActual" id="valorActual" value="{{ $candy->valorActual or old('valorActual') }}">
        @if($errors->has('valorActual'))
            <span>{{ $errors->first('valorActual') }}</span>
        @endif
    </div>
</div>

