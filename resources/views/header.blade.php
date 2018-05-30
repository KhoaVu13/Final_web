<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="Tìm kiếm sản phẩm">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="{{route('giohang')}}">Giỏ Hàng: {{$count}}</a></li>
							@if(Auth::check())					
							<li><a href="{{route('taikhoan')}}">Chào bạn: {{Auth::user()->full_name}}</a></li>
							<li><a href="{{route('logout')}}">Đăng xuất</a></li>
							@else
							<li><a href="{{route('signin')}}">Đăng Ký</a></li>
							<li><a href="{{route('login')}}">Đăng Nhập</a></li>
							@endif			
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="{{route('trangchu')}}" class="logo pull-left"><img src="themes/images/pic2.png" class="site_logo" alt="" height="700px" width="220px"></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a>Tai Nghe</a>
								<ul>
									@foreach($pt_1 as $pt1)
										<li><a href="{{route('sanpham',$pt1->id)}}">{{$pt1->name}}</a></li>
									@endforeach()									
								</ul>
							</li>

							<li><a>Linh Kiện</a>					
								<ul>
									@foreach($pt_0 as $pt0)
										<li><a href="{{route('sanpham',$pt0->id)}}">{{$pt0->name}}</a></li>
									@endforeach()								
								</ul>
							</li>
							<li><a href="">Bán Chạy</a></li>							
							<li><a href="">Khuyến Mãi</a></li>
						</ul>
					</nav>
				</div>
			</section>