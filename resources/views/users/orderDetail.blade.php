@extends('layouts.user')

@section('content')
<div class="row">
  <div class="col-12 mb-3">
    <h1>Detalle de la orden</h1>
  </div>
</div>
<div class="row justify-content-center">
  <div class="col-8">
    <div class="card border-left-primary shadow mb-4">
      <div class="card-body">
        <table data-order='[[ 1, "desc" ]]' class="table table-striped table-order-history" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr style="text-align: center;">
                <th>Producto</th>
                <th>Cantidad</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
              <tr>
                <td>{!! $product !!}</td>
                <td>
                  5
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </div>
  </div>
</div>
@endsection