@extends('admin.adminlte')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tabel Monitoring
        <small>Tabung Gas LPG</small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          

          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>STATUS</th>
                  <th>Tanggal/Waktu</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($jadwal as $indexKey => $DataJadwal)
                    <tr>
                  <td>{{ $indexKey+1 }}</td>
                  <td>
                    @if($DataJadwal->status)
                      Tutup
                    @else
                      Buka
                    @endif
                  </td>
                  <td> {{$DataJadwal->created_at}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @endsection