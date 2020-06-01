@extends('layouts.user')

@section('content')
<div class="row">
  <div class="col-12 mb-3">
    <h1 class="mb-4">Disponibilidad</h1>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      <h4 class="alert-heading">Información!</h4>
      <p>Antes de realizar su pedido digite la disponibilidad actual.</p>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="card border-left-primary shadow mb-4">
      <div class="card-body">
        <form class="formulario-pedidos" action="{!! route('postUserStock') !!}" autocomplete="off" method="POST">
          @csrf

          <table class="table table-striped table-hover formulario-pedidos__table">
            <tr>
              <th>COMPONENTE</th>
              <th colspan="2">O</th>
              <th colspan="2">A</th>
              <th colspan="2">B</th>
              <th colspan="2">AB</th>
            </tr>
            <tr>
              <td><p>Glóbulos rojos</p></td>
              <td><input class="form-control" type="text" name="opos" placeholder="O+" required="true"></td>
              <td><input class="form-control" type="text" name="oneg" placeholder="O-" required="true"></td>
              <td><input class="form-control" type="text" name="apos" placeholder="A+" required="true"></td>
              <td><input class="form-control" type="text" name="aneg" placeholder="A-" required="true"></td>
              <td><input class="form-control" type="text" name="bpos" placeholder="B+" required="true"></td>
              <td><input class="form-control" type="text" name="bneg" placeholder="B-" required="true"></td>
              <td><input class="form-control" type="text" name="abpos" placeholder="AB+" required="true"></td>
              <td><input class="form-control" type="text" name="abneg" placeholder="AB-" required="true"></td>
            </tr>
          </table>

          <input type="hidden" name="company_id" value="{!! Auth::user()->company_id !!}">

          <button class="btn btn-lg btn-primary float-right" type="submit"><i class="fas fa-save"></i> Guardar</button>
          
        </form>
      </div>
    </div>
  </div>
</div>

<!-- <div class="row">
  <div class="col-12">
    <div class="card border-left-primary shadow mb-4">
      <div class="card-body">
        <h2>Historial</h2>
        
        <table class="table table-striped table-hover formulario-pedidos__table">
          <tr>
            <th>FECHA</th>
            <th>O+</th>
            <th>O-</th>
            <th>A+</th>
            <th>A-</th>
            <th>B+</th>
            <th>B-</th>
            <th>AB+</th>
            <th>AB-</th>
          </tr>
          <tr>
            <td><p>23/08/2020</p></td>
            <td>4</td>
            <td>3</td>
            <td>0</td>
            <td>0</td>
            <td>2</td>
            <td>1</td>
            <td>7</td>
            <td>1</td>
          </tr>
        </table>
        
      </div>
    </div>
  </div>
</div> -->
@endsection