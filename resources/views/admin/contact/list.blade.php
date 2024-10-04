@extends('admin.layouts.app')

@section('content')
<section class="content-header">					
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>contact</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="{{route('contact.create')}}" class="btn btn-primary">New contact</a>
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
									<form action="{{route('contact.index')}}" method="get">
									<div class="input-group input-group" style="width: 250px;">
										<input type="text" value="{{Request::get('keyword')}}" name="keyword" class="form-control float-right" placeholder="Search">
					
										<div class="input-group-append">
										  <button type="submit" class="btn btn-default">
											<i class="fas fa-search"></i>
										  </button>
										</div>
									  </div></form>
								</div>
								<button type="button" class="btn btn-primary btn-sm"><a href="{{route('contact.index')}}" class="text-white text-decoration-none">Reset</a></button>
							</div>
							<div class="card-body table-responsive p-0">								
								<table class="table table-hover text-nowrap">
									<thead>
										<tr>
											<th width="60">ID</th>
											<th width="80">Title</th>
											<th>image</th>
											<th>Address</th>
                                            <th>phone</th>
                                            <th>email</th>
											<th width="100">Status</th>
											<th width="100">Action</th>
										</tr>
									</thead>
									<tbody>
										@if(!empty($contacts))
										@foreach($contacts as $cont)
                                        <tr>
                                            <td>{{ $cont->id }}</td>
                                            <td><img src="{{ asset('uploads/contact/'.$cont->image)}}" alt="Product Image" width="50"></td>
                                            <td>{{ $cont->title }}</td>
											<td>{{$cont->address}}</td>
                                            <td>{{$cont->phone}}</td>
                                            <td>{{$cont->email}}</td>
                                            <td>
                                                @if($cont->status == 1)
                                                <span class="badge badge-success">Active</span>
                                                @else
                                                <span class="badge badge-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
											<a href="{{route('contact.edit', $cont->id)}}">
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>

												</a>
												<a href="{{route('contact.delete',$cont->id)}}"class="text-danger w-4 h-4 mr-1">
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
						{{$contacts->links()}}	
						</div>
					</div>
					<!-- /.card -->
				</section>
@endsection

@section('customJs')
<script>
	
</script>
@endsection