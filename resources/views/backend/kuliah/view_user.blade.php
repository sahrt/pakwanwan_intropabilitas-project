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
                <h3 class="box-title">Data Kuliah</h3>
                <a href="{{ route('barang.add') }}" style="float:right;" type="button" class="btn btn-rounded btn-success mb-5">Pendaftran Kuliah</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Kode Kuliah</th>
                              <th>Nama Kuliah</th>
                              <th>Pengajar</th>
                              <th>Aksi</th>

                          </tr>
                      </thead>
                      <tbody>
                        @foreach($allDataKyn as $key => $brn)
                          <tr>
                              <td>{{ $key + 1 }}</td>
                              <td>{{ $brn->kodekuliah }}</td>
                              <td>{{ $brn->namakuliah }}</td>
                              <td>{{ $brn->pengajar }}</td>
                            
                                <td>
                                <a href="{{ route('kuliah.edit', $brn->id)}}" class="btn btn-info btn-rounded">Edit</a>
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