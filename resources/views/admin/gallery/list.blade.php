@extends('admin.layouts.app')

@section('content')
<section class="content-header">					
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>Gallary Pictures</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="{{route('gallery.create')}}" class="btn btn-primary">Create New</a>
							</div>
						</div>
					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<div class="container-fluid">
						@include('admin.message')
						<div class="card">
							<div class="card-header">
								<div class="card-tools">
									<form action="{{route('gallery.index')}}" method="get">
									<div class="input-group input-group" style="width: 250px;">
										<input type="text" value="{{Request::get('keyword')}}" name="keyword" class="form-control float-right" placeholder="Search">
					
										<div class="input-group-append">
										  <button type="submit" class="btn btn-default">
											<i class="fas fa-search"></i>
										  </button>
										</div>
									  </div></form>
								</div>
								<button type="button" class="btn btn-primary btn-sm"><a href="{{route('gallery.index')}}" class="text-white text-decoration-none">Reset</a></button>
							</div>
							<div class="card-body table-responsive p-0">								
								<table class="table table-hover text-nowrap">
									<thead>
										<tr>
											<th width="60">ID</th>
											<th width="80">Image</th>
											<th>Title</th>
											
											<th width="100">Status</th>
											<th width="100">Action</th>
										</tr>
									</thead>
									<tbody>
										@if(!empty($galleries))
										@foreach($galleries as $gallery)
                                        <tr>
                                            <td>{{ $gallery->id }}</td>
                                            <td><img src="{{ asset('uploads/galleries/'.$gallery->image)}}" alt="Product Image" width="50"></td>
                                            <td>{{ $gallery->title }}</td>
                                            <td>
                                                @if($gallery->status == 1)
                                                <span class="badge badge-success">Active</span>
                                                @else
                                                <span class="badge badge-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
											<a href="{{route('gallery.edit', $gallery->id)}}">
											<i class="fa fa-pencil-square-o "  aria-hidden="true"></i>

												</a>
												<a href="{{route('gallery.delete',$gallery->id)}}"class="text-danger w-4 h-4 mr-1">
												<i class="fa fa-trash text-danger" aria-hidden="true"></i>

												</a>
												
											</td>

											
									</tr>
							@endforeach
							@else
							<tr>
								<td colspan="5">
									No Redocrds found
								</td>
							</tr>

							@endif
									</tbody>
								</table>										
							</div>
						</div>
					</div>
					{{$galleries->links()}}
					<!-- /.card -->
				</section>
@endsection

@section('customJs')
<script>
	
</script>
@endsection