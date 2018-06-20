@extends('layouts.web')

@section('slider')
@endsection

@section('content')
<div class="col-md-12">
    <div class="section_heading text-center">
        <h2>Crear Oferta</h2>
    </div>

        <form action="{{ route('oferta.store') }}" method="POST">
            {!! csrf_field() !!} {{-- Token de Seguridad --}}
            @include('admin.oferta.partials.form')
            <button type="submit" class="btn btn-primary my-3">Enviar</button>
        </form>


</div>
@endsection
