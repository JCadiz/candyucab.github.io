@extends('layouts.web')

@section('slider')
@endsection

@section('content')
<div class="col-md-12">
    <div class="section_heading text-center">
        <h2>Actualizar Cliente Natural</h2>
    </div>

    <form action="{{ route('natural.update', $natural->id) }}" method="POST">
        {!! method_field('PUT') !!}
        {!! csrf_field() !!} {{-- Token de Seguridad --}}
        @include('admin.natural.partials.form')
        <button type="submit" class="btn btn-primary my-3">Enviar</button>
    </form>
</div>
@endsection
