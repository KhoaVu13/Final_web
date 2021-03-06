@extends('master')
@section('content')

			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner_1.jpg" alt="New products" >
				<h4><span>GIỎ HÀNG CỦA BẠN</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Giỏ</strong> Hàng</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Sản Phẩm</th>
									<th>Tên Sản Phẩm</th>
									<th>Số Lượng</th>
									<th>Giá</th>
									<th>Tổng Tiền</th>
									<th>Xóa</th>
								</tr>
							</thead>
							<tbody>
								<form method="POST" action="">
									<input type="hidden" name="_token" value="{{csrf_token()}}">
						@foreach($content as $c) 
								<tr>
									<td><a href="{{route('thongtinsanpham',$c->id)}}"><img width="128px" height="128px" alt="" src="themes/images/sport/{{$c->options->img}}"></a></td>
									<td><strong style="color: blue">{{$c->name}}</strong></td>

									<td>
										<input id="{{$c->rowId}}" class="qty Update" min="1" type="number" value="{{$c->qty}}">
									</td>
									
									<!--<td><a style="color: blue">{{$c->qty}}</a></td>-->
									<td>{{number_format($c->price)}} đ</td>
									<td>{{number_format($c->price*$c->qty)}} đ</td>
									<!-- <td><a class="Update" id="{{$c->rowid}}"><img width="25px" height="25px" src="themes/images/icon/update.png"></a></td> -->
									<td><a href="{{route('xoasanpham',$c->rowId)}}"><img width="25px" height="25px" src="themes/images/icon/delete.png"></a></td>
								</tr>		
						@endforeach
								<tr>
									<td><img src=""></td>
									<td></td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><strong></strong></td>
								</tr>	
							</tbody>
							</form>
						</table>
						<h4 style="color: blue; font-family: time new romane"><img src="themes/images/uudai.png"> Mã Giảm Giá/ Quà Tặng</h4>
						<!--<p>Các loại mã giảm giá</p>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
							Mã giảm giá
						</label>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Thành viên VIP
						</label>-->
						<a><input type="text" placeholder="Nhập ở đây"></a><br>
						<a><button class="btn" type="button">Áp Dụng</button></a>
						<hr>
						<p class="cart-total right">
							<strong>Tổng Hóa Đơn</strong>: {{number_format($subtotal)}} đ<br>
						</p>
						<hr/>
						<p class="buttons center">				
							<!-- <button class="btn" type="button">Tiếp tục</button>
							<button class="btn btn-inverse" type="submit" id="checkout">Thanh Toán</button> -->
							@if(Auth::check())
							@if($count==0)
							<div><a style="color: red;">Giỏ hàng trống</a></div>
							@else
							<a style="font-weight: bold;" href="{{route('thanhtoancus')}}">Đặt Hàng Với Địa Chỉ Khác</a>
							<a>&nbsp;</a><a>&nbsp;</a><a>&nbsp;</a>
							<a style="font-weight: bold;" href="{{route('thanhtoan')}}">Đặt Hàng Với Địa Chỉ Cá Nhân</a>
							@endif
							@else
							<a style="font-weight: bold;" href="{{route('login')}}">Bạn Phải Đăng Nhập Để Đặt hàng</a>
							@endif
						</p>					
					</div>
					<div class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">Liên quan</li>
								<li><a href="products.html">Thời Trang Gym Shark</a></li>
								<li class="active"><a href="products.html">Thời Trang Gym Shark</a></li>
								<li><a href="products.html">Thời Trang Gym Shark</a></li>
								<li><a href="products.html">Thời Trang Gym Shark</a></li>
								<li><a href="products.html">Thời Trang Gym Shark</a></li>
								<li><a href="products.html">Thời Trang Gym Shark</a></li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">Nhà cung cấp</li>
								<li><a href="products.html">Adidas</a></li>
								<li><a href="products.html">Nike</a></li>
								<li><a href="products.html">Convert</a></li>
								<li><a href="products.html">Puma</a></li>
							</ul>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Vừa xem</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<a href="product_detail.html"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
													<a href="product_detail.html" class="title"></a><br/>
													<a href="#" class="category">Mã Sản Phẩm: </a>
													<p class="price">Giá: </p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</section>			
			
@endsection