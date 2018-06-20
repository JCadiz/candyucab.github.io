@extends('layouts.web')

@section('title', 'CandyUcab :: AdminNatural')

@section('slider')
@endsection


@section('content')
<div class="col-md-12">
    <div class="section_heading text-center">
        <h2>Lista de Clientes Naturales</h2>
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

    @if($naturales->count() > 0)
        <table width="100vw" align="center" border="1" cellpadding="2" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>NombreUsuario</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>RIF</th>
                    <th>Cedula</th>
                    <th>Primer Nombre</th>
                    <th>Segundo Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
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
                    <th>Cedula</th>
                    <th>Primer Nombre</th>
                    <th>Segundo Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Create</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
            <tbody>
            @foreach($naturales as $natural)
                <tr>
                    <td><a href="{{ route('juridico.show', $natural->id) }}" class="btn btn-info">{{ $natural->id }}</a></td>
                    <td>{{ $natural->name }}</td>
                    <td>{{ $natural->email }}</td>
                    <td>{{ $natural->password }}</td>
                    <td>{{ $natural->rif }}</td>
                    <td>{{ $natural->cedula }}</td>
                    <td>{{ $natural->Pnombre }}</td>
                    <td>{{ $natural->denominacion }}</td>
                    <td>{{ $natural->razonSocial }}</td>
                    <td><a href="{{ route('natural.create') }}" class="btn btn-success">Create</a></td>
                    <td><a href="{{ route('natural.edit', $natural->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('natural.destroy', $natural->id) }}" class="btn btn-danger"
                        onclick="event.preventDefault();
                        document.getElementById('form-delete-{{$natural->id}}').submit();">Delete</a>
                        <form id="form-delete-{{$natural->id}}" method="post" action="{{ route('natural.destroy', $natural->id) }}">
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
                <li class="page-item @if($naturales->previousPageUrl() == null) disabled @endif">
                    <a class="page-link" href="{{ $naturales->previousPageUrl() }}"> << </a>
                </li>
                <li class="page-item @if($naturales->lastPage() == $naturales->currentPage()) disabled @endif">
                    <a class="page-link" href="{{ $naturales->nextPageUrl() }}"> >> </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection
