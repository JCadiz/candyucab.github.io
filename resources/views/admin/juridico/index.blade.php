@extends('layouts.web')

@section('title', 'CandyUcab :: AdminJuridicos')

@section('slider')
@endsection


@section('content')
<div class="col-md-12">
    <div class="section_heading text-center">
        <h2>Lista de Clientes Juridicos</h2>
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

    @if($juridicos->count() > 0)
        <table width="100vw" align="center" border="1" cellpadding="2" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NombreUsuario</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>RIF</th>
                    <th>Pagina Web</th>
                    <th>Capital</th>
                    <th>Denominacion Comercial</th>
                    <th>Razon Social</th>
                    <th>Create</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>NombreUsuario</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>RIF</th>
                    <th>Pagina Web</th>
                    <th>Capital</th>
                    <th>Denominacion Comercial</th>
                    <th>Razon Social</th>
                    <th>Create</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
            <tbody>
            @foreach($juridicos as $juridico)
                <tr>
                    <td><a href="{{ route('juridico.show', $juridico->id) }}" class="btn btn-info">{{ $juridico->id }}</a></td>
                    <td>{{ $juridico->name }}</td>
                    <td>{{ $juridico->email }}</td>
                    <td>{{ $juridico->password }}</td>
                    <td>{{ $juridico->rif }}</td>
                    <td>{{ $juridico->paginaWeb }}</td>
                    <td>{{ $juridico->capital }}</td>
                    <td>{{ $juridico->denominacion }}</td>
                    <td>{{ $juridico->razonSocial }}</td>
                    <td><a href="{{ route('juridico.create') }}" class="btn btn-success">Create</a></td>
                    <td><a href="{{ route('juridico.edit', $juridico->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('juridico.destroy', $juridico->id) }}" class="btn btn-danger"
                        onclick="event.preventDefault();
                        document.getElementById('form-delete-{{$juridico->id}}').submit();">Delete</a>
                        <form id="form-delete-{{$juridico->id}}" method="post" action="{{ route('juridico.destroy', $juridico->id) }}">
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
                <li class="page-item @if($juridicos->previousPageUrl() == null) disabled @endif">
                    <a class="page-link" href="{{ $juridicos->previousPageUrl() }}"> << </a>
                </li>
                <li class="page-item @if($juridicos->lastPage() == $juridicos->currentPage()) disabled @endif">
                    <a class="page-link" href="{{ $juridicos->nextPageUrl() }}"> >> </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection
