@extends('layouts.web')

@section('slider')
@endsection

@section('content')
<section class="new_arrivals_area section_padding_100_0 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section_heading text-center">
                    <h2>Tienda</h2>
                </div>
            </div>
        </div>

         <table width="100vw" align="center" border="1" cellpadding="2" class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>{{ $tienda->id }}</a></td>
                    <td>{{ $tienda->nombre }}</td>
                    <td>{{ $tienda->tipo }}</td>

                </tr>
            </tbody>
        </table>

    </div>


</section>

<div class="shop_pagination_area wow d-flex justify-content-center mb-4 fadeInUp" data-wow-delay="1.1s">
    <nav aria-label="Page navigation ">
        <ul class="pagination pagination-sm">
            <li class="page-item">
                <a class="page-link" href="{{ route('tienda') }}">back</a>
            </li>
        </ul>
    </nav>
</div>
@endsection
