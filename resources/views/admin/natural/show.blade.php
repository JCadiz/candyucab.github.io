@extends('layouts.web')

@section('slider')
@endsection

@section('content')
<section class="new_arrivals_area section_padding_100_0 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading text-center">
                    <h2>Cliente Natural</h2>
                </div>
            </div>
        </div>

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
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>{{ $natural->id }}</a></td>
                    <td>{{ $natural->name }}</td>
                    <td>{{ $natural->email }}</td>
                    <td>{{ $natural->password }}</td>
                    <td>{{ $natural->rif }}</td>
                    <td>{{ $natural->cedula }}</td>
                    <td>{{ $natural->Pnombre }}</td>
                    <td>{{ $natural->denominacion }}</td>
                    <td>{{ $natural->razonSocial }}</td>
                </tr>
            </tbody>
        </table>

    </div>


</section>
<div class="shop_pagination_area wow d-flex justify-content-center mb-4 fadeInUp" data-wow-delay="1.1s">
    <nav aria-label="Page navigation ">
        <ul class="pagination pagination-sm">
            <li class="page-item">
                <a class="page-link" href="{{ route('natural') }}">back</a>
            </li>
        </ul>
    </nav>
</div>
@endsection
