@extends('admin.layouts.app')

@section('content')
<section class="content-header">					
					<div class="container-fluid my-2">
						<div class="row mb-2">
							<div class="col-sm-6">
								<h1>News</h1>
							</div>
							<div class="col-sm-6 text-right">
								<a href="{{route('news.create')}}" class="btn btn-primary">New News</a>
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
									<form action="{{route('news.index')}}" method="get">
									<div class="input-group input-group" style="width: 250px;">
										<input type="text" value="{{Request::get('keyword')}}" name="keyword" class="form-control float-right" placeholder="Search">
					
										<div class="input-group-append">
										  <button type="submit" class="btn btn-default">
											<i class="fas fa-search"></i>
										  </button>
										</div>
									  </div></form>
								</div>
								<button type="button" class="btn btn-primary btn-sm"><a href="{{route('news.index')}}" class="text-white text-decoration-none">Reset</a></button>
							</div>
							<div class="card-body table-responsive p-0">								
								<table class="table table-hover text-nowrap">
									<thead>
										<tr>
											<th width="60">ID</th>
											<th width="80">Image</th>
											<th>title</th>
											<th>Date</th>
											<th width="100">Status</th>
											<th width="100">Action</th>
										</tr>
									</thead>
									<tbody>
										@if(!empty($newss))
										@foreach($newss as $news)
                                        <tr>
                                            <td>{{ $news->id }}</td>
                                            <td><img src="{{ asset('uploads/news/'.$news->image)}}" alt="Product Image" width="50"></td>
                                            <td>{{ $news->title }}</td>
											<td>{{$news->date}}</td>
                                            <td>
                                                @if($news->status == 1)
                                                <span class="badge badge-success">Active</span>
                                                @else
                                                <span class="badge badge-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
											<a href="{{route('news.edit', $news->id)}}">
											<i class="fa fa-pencil-square-o" aria-hidden="true"></i>

												</a>
												<a href="{{route('news.delete',$news->id)}}"class="text-danger w-4 h-4 mr-1">
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
					<!-- /.card -->
				</section>
@endsection

@section('customJs')
<script>
	
</script>
@endsection