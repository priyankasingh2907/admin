<aside class="main-sidebar sidebar-dark-primary elevation-4">
				<!-- Brand Logo -->
				<a href="{{route('admin.dashboard')}}" class="brand-link">
                <img src="{{asset('admin/assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
					<span class="brand-text font-weight-light">LARAVEL-Admin</span>
				</a>
				<!-- Sidebar -->
               		<div class="sidebar">
					<!-- Sidebar user (optional) -->
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
							<!-- Add icons to the links using the .nav-icon class
								with font-awesome or any other icon font library -->
							<li class="nav-item">
								<a
                                 href="{{route('admin.index')}}" class="nav-link">
									<i class="nav-icon fas fa-tachometer-alt"></i>
									<p>Dashboard</p>
								</a>																
							</li>
							<li class="nav-item">
								<a href="{{route('slider.index')}}" class="nav-link">
									<i class="nav-icon fas fa-file-alt"></i>
									<p>Slider</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('member.index')}}" class="nav-link">
									<i class="nav-icon fas fa-file-alt"></i>
									<p>Members</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('news.index')}}" class="nav-link">
									<svg class="h-6 nav-icon w-6 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
										<path stroke-linecap="round" stroke-linejoin="round" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
									  </svg>
									<p>News</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('seminar.index')}}" class="nav-link">
									<i class="nav-icon fas fa-tag"></i>
									<p>Seminar</p>
								</a>
							</li>
							
							<li class="nav-item">
								<a href="{{route('print.index')}}" class="nav-link">
									<!-- <i class="nav-icon fas fa-tag"></i> -->
									<i class="fas fa-truck nav-icon"></i>
									<p>Print Media</p>
								</a>
							</li>							
							<li class="nav-item">
								<a href="{{route('gallery.index')}}" class="nav-link">
									<i class="nav-icon fas fa-shopping-bag"></i>
									<p>Gallery</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('video.index')}}" class="nav-link">
									<i class="nav-icon  fa fa-percent" aria-hidden="true"></i>
									<p>Video</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('admin.index')}}" class="nav-link">
									<i class="nav-icon  fas fa-users"></i>
									<p>Users</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="{{route('admin.index')}}" class="nav-link">
									<i class="nav-icon  far fa-file-alt"></i>
									<p>Settings</p>
								</a>
							</li>							
						</ul>
					</nav>
					<!-- /.sidebar-menu -->
				</div>
				<!-- /.sidebar -->
         	</aside>