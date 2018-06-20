@extends('layouts.web')

@section('slider')
@endsection

@section('content')
<div class="col-md-12">
    <div class="section_heading text-center">
        <h2>Crear Tienda</h2>
    </div>

        <form action="{{ route('tienda.store') }}" method="POST">
            {!! csrf_field() !!} {{-- Token de Seguridad --}}
            @include('admin.tienda.partials.form')
            <button type="submit" class="btn btn-primary my-3">Enviar</button>
        </form>


</div>
@endsection
