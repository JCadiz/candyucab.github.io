@extends('layouts.web')

@section('title', 'CandyUcab :: AdminOferta')

@section('slider')
@endsection


@section('content')
<div class="col-md-12">
    <div class="section_heading text-center">
        <h2>Lista de Ofertas</h2>
    </div>

@if(Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Notification:</strong>  {{ Session::get('success') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif
@if(Session::get('warning'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Notification:</strong>  {{ Session::get('warning') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

    @if($ofertas->count() > 0)
        <table width="100vw" align="center" border="1" cellpadding="2" class="table table-bordered">
            <thead>
                <tr>

                    <th>#</th>
                    <th>Descripcion</th>
                    <th>Porcentaje</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Create</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tfoot>
                <tr>

                    <th>#</th>
                    <th>Descripcion</th>
                    <th>Porcentaje</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Create</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
            <tbody>
            @foreach($ofertas as $oferta)
                <tr>
                    <td><a href="{{ route('oferta.show', $oferta->id) }}" class="btn btn-info">{{ $oferta->id }}</a></td>
                    <td>{{ $natural->descripcion }}</td>
                    <td>{{ $natural->porcentaje }}</td>
                    <td>{{ $natural->fechaInicio }}</td>
                    <td>{{ $natural->fechaFin }}</td>
                    <td><a href="{{ route('oferta.create') }}" class="btn btn-success">Create</a></td>
                    <td><a href="{{ route('oferta.edit', $oferta->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('oferta.destroy', $oferta->id) }}" class="btn btn-danger"
                        onclick="event.preventDefault();
                        document.getElementById('form-delete-{{$oferta->id}}').submit();">Delete</a>
                        <form id="form-delete-{{$oferta->id}}" method="post" action="{{ route('oferta.destroy', $oferta->id) }}">
                            {!! method_field('DELETE') !!}
                            {!! csrf_field() !!}
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h3>Without Results</h3>
    @endif

    <!-- Pagination -->

    <div class="shop_pagination_area wow d-flex justify-content-center mb-4 fadeInUp" data-wow-delay="1.1s">
        <nav aria-label="Page navigation ">
            <ul class="pagination pagination-sm">
                <li class="page-item @if($ofertas->previousPageUrl() == null) disabled @endif">
                    <a class="page-link" href="{{ $ofertas->previousPageUrl() }}"> << </a>
                </li>
                <li class="page-item @if($ofertas->lastPage() == $ofertas->currentPage()) disabled @endif">
                    <a class="page-link" href="{{ $ofertas->nextPageUrl() }}"> >> </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection
