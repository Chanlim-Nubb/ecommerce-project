@extends('admin.admin_master')
@section('admin')
<!-- Main content -->
    <section class="content">
        <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Admin Edit Profile</h4>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">
					<form method="POST" action="{{route('admin.profile.store')}}" enctype="multipart/form-data">
					  @csrf
                        <div class="row">
						<div class="col-md-3"></div>
                        <div class="col-md-6">						
							<div class="form-group">
								<h5>Username <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="text" id="name" name="name" value="{{$editData->name}}" class="form-control" required=""> <div class="help-block"></div></div>
							</div>
							<div class="form-group">
								<h5>Email <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="email" id="email" name="email" value="{{$editData->email}}" class="form-control" required=""> <div class="help-block"></div></div>
							</div>
							
                            <div class="form-group">
								<h5>Profile Image <span class="text-danger">*</span></h5>
								<div class="controls">
									<input type="file" name="profile_photo_path" class="form-control" required="" id="img">
                                    <div class="help-block"></div>
                                </div>
							</div>
                            <div class="text-xs-right" style="float: right">
                                <button type="submit" class="btn btn-rounded btn-success">Update</button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <img id="showImg" src="{{ (!empty($editData->profile_photo_path))? url('upload/admin_images/'.$editData->profile_photo_path):url('upload/no_image.jpg') }}" style="width: 100px; height:100px" alt="" srcset="">
                        </div>
                    </div>
						
                    
					</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
    </section>
<!-- /.content -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#img').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImg').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
@endsection