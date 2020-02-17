@extends('layouts.shipping')

@section('css')
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="row">
  <div class="col-12 mb-3">
    <h1>Historial de pedidos</h1>
  </div>
</div>
<div class="row justify-content-center">
  <div class="col-8">
    <div class="card border-left-primary shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table data-order='[[ 1, "desc" ]]' class="table table-striped table-order-history" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr style="text-align: center;">
                <th>Fecha</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>09/02/2020</td>
                <td>
                  <span class="badge badge-danger">En proceso</span>
                </td>
                <td>
                  <a class="btn btn-success" href="">
                    <i class="fas fa-eye"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>07/02/2020</td>
                <td>
                  <span class="badge badge-info">Con pendientes</span>
                </td>
                <td>
                  <a class="btn btn-success" href="">
                    <i class="fas fa-eye"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>07/02/2020</td>
                <td>
                  <span class="badge badge-secondary">Cerrado</span>
                </td>
                <td>
                  <a class="btn btn-success" href="">
                    <i class="fas fa-eye"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>05/02/2020</td>
                <td>
                  <span class="badge badge-info">Con pendientes</span>
                </td>
                <td>
                  <a class="btn btn-success" href="">
                    <i class="fas fa-eye"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>02/02/2020</td>
                <td>
                  <span class="badge badge-secondary">Cerrado</span>
                </td>
                <td>
                  <a class="btn btn-success" href="">
                    <i class="fas fa-eye"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>01/02/2020</td>
                <td>
                  <span class="badge badge-secondary">Cerrado</span>
                </td>
                <td>
                  <a class="btn btn-success" href="">
                    <i class="fas fa-eye"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>01/02/2020</td>
                <td>
                  <span class="badge badge-secondary">Cerrado</span>
                </td>
                <td>
                  <a class="btn btn-success" href="">
                    <i class="fas fa-eye"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>01/02/2020</td>
                <td>
                  <span class="badge badge-secondary">Cerrado</span>
                </td>
                <td>
                  <a class="btn btn-success" href="">
                    <i class="fas fa-eye"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>01/02/2020</td>
                <td>
                  <span class="badge badge-secondary">Cerrado</span>
                </td>
                <td>
                  <a class="btn btn-success" href="">
                    <i class="fas fa-eye"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>01/02/2020</td>
                <td>
                  <span class="badge badge-secondary">Cerrado</span>
                </td>
                <td>
                  <a class="btn btn-success" href="">
                    <i class="fas fa-eye"></i>
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<script>
  $(document).ready(function() {
    $('#dataTable').DataTable({
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
      }
    });
  });
</script>
@endsection

