@extends('layouts.web')

@section('title', 'CandyUcab :: AdminCandyP')

@section('slider')
@endsection


@section('content')
<div class="col-md-12">
    <div class="section_heading text-center">
        <h2>Lista de Candy Point por Usuario</h2>
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

    @if($candys->count() > 0)
        <table width="100vw" align="center" border="1" cellpadding="2" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Cantidad</th>
                    <th>ValorActual</th>
                    <th>Cliente</th>
                    <th>Create</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Cantidad</th>
                    <th>ValorActual</th>
                    <th>Cliente</th>
                    <th>Create</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
            <tbody>
            @foreach($candys as $candy)
                <tr>
                    <td><a href="{{ route('movies.show', $candy->id) }}" class="btn btn-info">{{ $candy->id }}</a></td>
                    <td>{{ $candy->cantidad }}</td>
                    <td>{{ $candy->valorActual }}</td>
                    @if( $candy->fk_naturals->isEmpty())
                        <td>{{ $candy->fk_juridicos }}</td>
                    @elseif($candy->fk_naturals->isEmpty())
                        <td>{{ $candy->fk_naturals }}</td>
                    @endif
                    <td>{{ $candy->director }}</td>
                    <td><a href="{{ route('candyP.create') }}" class="btn btn-success">Create</a></td>
                    <td><a href="{{ route('candyP.edit', $candy->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('candyP.destroy', $candy->id) }}" class="btn btn-danger"
                        onclick="event.preventDefault();
                        document.getElementById('form-delete-{{$candy->id}}').submit();">Delete</a>
                        <form id="form-delete-{{$candy->id}}" method="post" action="{{ route('candyP.destroy', $candy->id) }}">
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
                <li class="page-item @if($candys->previousPageUrl() == null) disabled @endif">
                    <a class="page-link" href="{{ $candys->previousPageUrl() }}"> << </a>
                </li>
                <li class="page-item @if($candys->lastPage() == $candys->currentPage()) disabled @endif">
                    <a class="page-link" href="{{ $candys->nextPageUrl() }}"> >> </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection
