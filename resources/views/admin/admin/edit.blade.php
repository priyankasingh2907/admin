@extends('admin.layouts.app')

@section('content')
<section class="content-header">
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Admin</h1>
            </div>
            <div class="col-sm-6 text-right">
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <form action="" method="post" id="adminEditForm" name="adminEditForm">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" value="{{$admins->name}} " id="name" class="form-control" placeholder="Name">
                                        <p class="error"></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input readonly type="email" value="{{$admins->email}} " name="email" id="email" class="form-control" placeholder="Email">
                                        <p class="error"></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="address">Address</label>
                                        <textarea name="address" value="{{$admins->address}} " id="address" cols="30" rows="10" class="summernote" placeholder="address"></textarea>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                        <h2 class="h4 mb-3">Media</h2>
                            <img src="{{ asset('uploads/admin/'.$admin->image)}}" alt="Product Image" width="50">
                             <label for="img">Image</label>
                            <input type="file" name="img" id="img" class="form-control" placeholder="image">
                            <p class="error"></p>

                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <label for="phone">Phone</label>
                            <input type="Number" name="phone" value="{{$admin->phone}} " id="phone" class="form-control" placeholder="phone">
                            <p class="error"></p>

                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="h4 mb-3">Gender</h2>
                            <div class="mb-3">
                                <select name="gender" id="gender" class="form-control">
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                  
                  
                </div>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="h4 mb-3">Product status</h2>
                            <div class="mb-3">
                                <select name="status" id="status" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Block</option>
                                </select>
                            </div>
                        </div>
                    </div>
                 
                   
                    <div class="card mb-3">
                        <div class="card-body">
                            <h2 class="h4 mb-3">Featured product</h2>
                            <div class="mb-3">
                                <select name="fstatus" id="status" class="form-control">
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                </select>
                                <p class="error"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pb-5 pt-3">
                <button class="btn btn-primary">Create</button>
                
                <a href="{{route('admin.index')}}" class="btn btn-outline-dark ml-3">Cancel</a>
             
            </div>
        </div>
    </form>
    <!-- /.card -->
</section>
@endsection

@section('customJs')

<script>
   

    	$("#adminEditForm").submit(function(e) {
		e.preventDefault();
		$("button[type=submit]").prop('disable',true);

		$.ajax({
			url: "{{route('admin.update',$admins->id)}}",
			type: "POST",
			data: new FormData(this),
			dataType: 'json',
			contentType: false,
			cache: false,
			processData: false,
			success: function(response) {
				var errors = response['message'];
				$("button[type=submit]").prop('disable',false);

				if (response['status'] == true) {

					window.location.href="{{route('admins.index')}}";



					// $('#title').removeClass('is-invalid');
					// $('#title').siblings('p').removeClass('.invalid-feedback text-danger').html("");
					// $('#slug').removeClass('is-invalid');
					// $('#slug').siblings('p').removeClass('.invalid-feedback text-danger').html("");
					// $('#image').removeClass('is-invalid');
					// $('#image').siblings('p').removeClass('.invalid-feedback text-danger').html("");



				} else {

                    var errors = response['message'];

                    $(".error").removeClass('invalid-feedback').html('');

                    $("input[type='text'],select").removeClass('is-invalid');
                    $.each(errors,function(key,value){
// dd(error);
// console.log(errors);
// console.log([value][0]);
                        $(`#${key}`).addClass('is-invalid').siblings('p').addClass('invalid-feedback').html(value);
                    });



					// if (errors['title']) {
					// 	$('#title').addClass('is-invalid');
					// 	$('#title').siblings('p').addClass('.invalid-feedback text-danger').html(errors['title']);

					// } else {
					// 	$('#title').removeClass('is-invalid');
					// 	$('#title').siblings('p').removeClass('.invalid-feedback text-danger').html("");
					// }
					// if (errors['slug']) {
					// 	$('#slug').addClass('is-invalid');
					// 	$('#slug').siblings('p').addClass('.invalid-feedback text-danger').html(errors['slug']);

					// } else {
					// 	$('#slug').removeClass('is-invalid');
					// 	$('#slug').siblings('p').removeClass('.invalid-feedback text-danger').html("");
					// }
					// if (errors['image']) {
					// 	$('#image').addClass('is-invalid');
					// 	$('#image').siblings('p').addClass('.invalid-feedback text-danger').html(errors['image']);

					// } else {
					// 	$('#image').removeClass('is-invalid');
					// 	$('#image').siblings('p').removeClass('.invalid-feedback text-danger').html("");
					// }

				}


			},
			error: function(jqHR, exception) {
				console.log('something went wrong.');
			}
		});

	});

</script>
@endsection