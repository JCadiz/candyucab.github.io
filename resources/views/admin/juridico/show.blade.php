@extends('layouts.web')

@section('slider')
@endsection

@section('content')
<section class="new_arrivals_area section_padding_100_0 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading text-center">
                    <h2>Cliente juridico</h2>
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
                    <th>Pagina Web</th>
                    <th>Capital</th>
                    <th>Denominacion Comercial</th>
                    <th>Razon Social</th>
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
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>{{ $juridico->id }}</a></td>
                    <td>{{ $juridico->name }}</td>
                    <td>{{ $juridico->email }}</td>
                    <td>{{ $juridico->password }}</td>
                    <td>{{ $juridico->rif }}</td>
                    <td>{{ $juridico->paginaWeb }}</td>
                    <td>{{ $juridico->capital }}</td>
                    <td>{{ $juridico->denominacion }}</td>
                    <td>{{ $juridico->razonSocial }}</td>
                </tr>
            </tbody>
        </table>

    </div>


</section>

<div class="shop_pagination_area wow d-flex justify-content-center mb-4 fadeInUp" data-wow-delay="1.1s">
    <nav aria-label="Page navigation ">
        <ul class="pagination pagination-sm">
            <li class="page-item">
                <a class="page-link" href="{{ route('juridico') }}">back</a>
            </li>
        </ul>
    </nav>
</div>
@endsection
