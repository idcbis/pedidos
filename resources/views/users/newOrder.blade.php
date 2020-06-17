@extends('layouts.user')

@section('content')
<div class="row">
  <div class="col-12 mb-3">
    <h1>Nuevo pedido</h1>
  </div>
</div>
<div class="row" id="app">

  <div class="col-12">
    <div class="card border-left-primary shadow mb-4">
      <div class="card-body">
        <form class="formulario-pedidos" action="{{ route('userNewOrder') }}" autocomplete="off">
          @csrf

          <table class="table table-striped table-hover formulario-pedidos__table">
            <tr>
              <th>COMPONENTE</th>
              <th colspan="2">O</th>
              <th colspan="2">A</th>
              <th colspan="2">B</th>
              <th colspan="2">AB</th>
            </tr>
            @foreach($products as $product)
            <tr>
              <td><p>{!! $product->name !!}</p></td>
              <td><input class="form-control" type="text" name="{!! $product['shortName'] !!}_O+" placeholder="O+"></td>
              <td><input class="form-control" type="text" name="{!! $product['shortName'] !!}_O-" placeholder="O-"></td>
              <td><input class="form-control" type="text" name="{!! $product['shortName'] !!}_A+" placeholder="A+"></td>
              <td><input class="form-control" type="text" name="{!! $product['shortName'] !!}_A-" placeholder="A-"></td>
              <td><input class="form-control" type="text" name="{!! $product['shortName'] !!}_B+" placeholder="B+"></td>
              <td><input class="form-control" type="text" name="{!! $product['shortName'] !!}_B-" placeholder="B-"></td>
              <td><input class="form-control" type="text" name="{!! $product['shortName'] !!}_AB+" placeholder="AB+"></td>
              <td><input class="form-control" type="text" name="{!! $product['shortName'] !!}_AB-" placeholder="AB-"></td>
            </tr>
            @endforeach
          </table>
          
          <button class="btn btn-lg btn-primary float-right" type="submit"><i class="fas fa-check"></i> Solicitar</button>
          
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script> -->
<script>

  function handleSubmit(event) {
    event.preventDefault();
    console.log('entro');
  }

  let items = document.getElementsByClassName('form-control');

  for (let i = 0; i < items.length; i++) {
    items[i].addEventListener('keyup', function (e) {
      if(e.target.value) {
        this.classList.add('selected');
      } else {
        this.classList.remove('selected');
      }
    });
  }
  
</script>
@endsection