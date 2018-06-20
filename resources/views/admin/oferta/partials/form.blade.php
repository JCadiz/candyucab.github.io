<div class="form-row">
    <div class="form-group col-md-12 @if($errors->has('porcentaje')) is-invalid @endif">
        <label for="porcentaje" ><strong>Porcentaje de Oferta</strong></label>
        <input class="form-control" type="text" name="porcentaje" id="porcentaje" value="{{ $oferta->porcentaje or old('porcentaje') }}">
        @if($errors->has('porcentaje'))
            <span>{{ $errors->first('porcentaje') }}</span>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6 @if($errors->has('fechaInicio')) is-invalid @endif">
        <label for="fechaInicio" ><strong>Fecha Inicio Oferta</strong></label>
        <input class="form-control" type="date" name="fechaInicio" id="fechaInicio" value="{{ $oferta->fechaInicio or old('fechaInicio') }}">
        @if($errors->has('fechaInicio'))
            <span>{{ $errors->first('fechaInicio') }}</span>
        @endif
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-12 @if($errors->has('fechaFin')) is-invalid @endif">
        <label for="fechaFin" ><strong>Fecha Fin Oferta</strong></label>
        <input class="form-control" type="date" name="fechaFin" id="fechaFin" value="{{ $oferta->fechaFin or old('fechaFin') }}">
        @if($errors->has('fechaFin'))
            <span>{{ $errors->first('fechaFin') }}</span>
        @endif
    </div>
</div>
div class="form-group @if($errors->has('descripcion')) is-invalid @endif">
     <label for="title" ><strong>Descripcion</strong></label>
     <textarea class="form-control" id="descripcion" name="descripcion" rows="3" value="{{ $oferta->descripcion or old('descripcion') }}"></textarea>
    @if($errors->has('descripcion'))
        <span>{{ $errors->first('descripcion') }}</span>
    @endif
</div>
