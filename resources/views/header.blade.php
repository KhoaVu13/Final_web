
<div id="top-header">
	<div class="container">
		<div class="topheader-left">
			<ul>
				<li>
					<a href="#"><img src="themes/images/call.png" alt="Hình cuộc gọi"></a>
					<a href="#"><i class="fa fa-phone"></i> (028) 372 52002</a>
					
				</li>

				<li>
					<a href="#"><img src="themes/images/mail1.png" alt="Hình mail"></a>
					<a href="#"><i class="fa fa-envelope-o"></i> 4musketeers@gmail.com</a>
					
				</li>
			</ul>
		</div>
		<div class="topheader-right">
			<ul>
				@if(Auth::check())
				@if(Auth::user()->member==null)					
				<li><a href="{{route('taikhoan')}}"><img src="http://icons.iconarchive.com/icons/alecive/flatwoken/24/Apps-Contacts-icon.png"> Chào bạn: {{Auth::user()->full_name}}-(Thường)</a></li>
				<li><a href="{{route('logout')}}"><img src="http://icons.iconarchive.com/icons/graphicloads/100-flat-2/24/inside-logout-icon.png"> Đăng xuất</a></li>
				@else
				<li><a href="{{route('taikhoan')}}"><img src="http://icons.iconarchive.com/icons/alecive/flatwoken/24/Apps-Contacts-icon.png"> Chào bạn: {{Auth::user()->full_name}}--({{Auth::user()->member}})</a></li>
				<li><a href="{{route('logout')}}"><img src="http://icons.iconarchive.com/icons/graphicloads/100-flat-2/24/inside-logout-icon.png"> Đăng xuất</a></li>
				@endif
				@else
				<li>
					<a href="{{route('signin')}}"> <img src="http://icons.iconarchive.com/icons/graphicloads/flat-finance/24/person-icon.png"> Đăng Ký</a>
				</li>
				<li><a href="{{route('login')}}"><img src="http://icons.iconarchive.com/icons/alecive/flatwoken/24/Apps-Lock-Ok-icon.png"> Đăng Nhập</a></li>
				@endif			
			</ul>
		</div>
		
	</div>
</div>
<div id="header" class="container">
	<!--row-->
	<div class="row">
		<!--logo-->
		<div class="divleft">
			<div class="header-logo">
				<a href="{{route('trangchu')}}" class="logo">
					<img src="themes/images/pic2.png" alt="Logo">
				</a>
			</div>
		</div>
		<!--Thanh tìm kiếm-->
		<div class="divmiddle">
			<div class="header-search">
				<form>
					<div id="containSearch">
						<input id="txtSearch" type="text" name="NhapNoiDung" placeholder="Nhập sản phẩm cần tìm">
						<input id="btnSearch" type="submit" name="btnSearch" value="" >
					</div>
				</form>
			</div>
		</div>
		<div class="divright">
			<div class="account pull-right">
				<a href="{{route('giohang')}}"><img src="themes/images/cart.png" alt="Hình giỏ hàng"></a>
				<a href="{{route('giohang')}}"><p>Giỏ Hàng: {{$count}}</p></a>
			</div>
		</div>

	</div>
</div>
</div>
<div id="wrapper" class="container">
	<section class="navbar main-menu">
		<div class="navbar-inner main-menu">				
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

	<!--cÒN CHƯA ĐÓNG XONG 1 DẤU NGOẶC NÈ-->




