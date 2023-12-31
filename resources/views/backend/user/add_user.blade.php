@extends('admin.admin_master')
@section('admin')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		
		<!-- Main content -->
		<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Tambah User</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="post" action="{{ route('users.store') }}">
                        @csrf
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
                                    <h5>Grup User <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="selectUser" id="selectUser" required class="form-control">
                                            <option value="">Pilih grup user</option>
                                            <option value="admin">admin</option>
                                            <option value="user">user</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- End basic select -->
							</div>
                             <!-- End col md-6 -->
							<div class="col-md-6">
								<div class="form-group">
                                    <h5>Nama <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="textNama" class="form-control" required data-validation-required-message="This field is required"> </div>
                                    <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>
                                </div>
								</div>
						
                             <!-- End col md-6 -->
						</div>
                        <!-- End row select -->
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Email<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Password<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="password" name="password" class="form-control" required data-validation-required-message="This field is required"> </div>
                                </div>
                            </div>
                        </div>
                        <!-- End row -->
						<div class="text-xs-right">
							<button type="submit" class="btn btn-rounded btn-info">Submit</button>
						</div>
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>
		<!-- /.content -->
	  </div>
  </div>
  <!-- /.content-wrapper -->

@endsection

<script src="{{ asset('backend/js/pages/form-validation.js') }}"></script>


<div class="btn-max">
  
</div>