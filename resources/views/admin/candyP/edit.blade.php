@extends('layouts.web')

@section('slider')
@endsection

@section('content')
<div class="col-md-12">
    <div class="section_heading text-center">
        <h2>Actualizar CandyPoints a un cliente</h2>
    </div>

    <form action="{{ route('candyP.update', $candy->id) }}" method="POST">
        {!! method_field('PUT') !!}
        {!! csrf_field() !!} {{-- Token de Seguridad --}}
        @include('admin.candyP.partials.form')
        <button type="submit" class="btn btn-primary my-3">Enviar</button>
    </form>
</div>
@endsection
