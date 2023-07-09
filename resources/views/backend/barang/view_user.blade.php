@extends('admin.admin_master')
@extends('admin.admin_master')
@section('admin')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <div class="container-full">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
        <div class="row"> 

          <div class="col-12">

           <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Data Barang</h3>
                <a href="{{ route('barang.add') }}" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5">Tambah Barang</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama Barang</th>
                              <th>Perusahaan</th>
                              <th>Jumblah Barang</th>
                              <th>Jenis Barang</th>
                              <th>Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($allDataBrn as $key => $brn)
                          <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ $brn->nama }}</td>
                              <td>{{ $brn->perusahaan }}</td>
                              <td>{{ $brn->jumblah }}</td>
                              <td>{{ $brn->jenis}}</td>
                             
                            
                                <td>
                                <a href="{{ route('barang.edit', $brn->id) }}" class="btn btn-info btn-rounded">Edit</a>
                                <a href="" id= "delete" class="btn btn-danger btn-rounded">Delete</a>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                   
                    </table>
                  </div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->

           
            <!-- /.box -->          
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    
    </div>
</div>
<!-- /.content-wrapper -->

@endsection

<!-- Vendor JS -->
<script src="{{asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>
<script src="{{asset('backend/js/pages/data-table.js')}}"></script>