@extends('admin.admin_master')
@section('admin')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		
		<!-- Main content -->
		<section class="content">
    <div class="card">
            <div class="card-body">

                <h5 class="card-title" style="font-size: 30px; "> Ubah Data Kuliah</h5>
                <br>
                <br>
              

              <!-- General Form Elements -->
              <form action="{{route('kuliah.update',$editData->id)}}" method="post" >
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Kode Kuliah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="kodekuliah"  value="{{ $editData->kodekuliah }}" required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama Kuliah</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="namakuliah"  value="{{ $editData->namakuliah }}"required>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Pengajar</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="pengajar"  value="{{ $editData->pengajar }}"required>
                  </div>
                </div>
                  <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">
                  </label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name ="submit">Ubah</button>
                  </div>
                </div>

              </form>
              <!-- End General Form Elements -->

            </div>
          </div>

        </div>

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection

<script src="{{ asset('backend/js/pages/form-validation.js') }}"></script>