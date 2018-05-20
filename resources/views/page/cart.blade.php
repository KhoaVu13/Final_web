@extends('master')
@section('content')

			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner_1.jpg" alt="New products" >
				<h4><span>Shopping Cart</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Xóa</th>
									<th>Sản Phẩm</th>
									<th>Tên Sản Phẩm</th>
									<th>Số Lượng</th>
									<th>Giá</th>
									<th>Tổng Tiền</th>
								</tr>
							</thead>
							<tbody>
						@foreach($content as $c)
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href=""><img width="128px" height="128px" alt="" src="themes/images/sport/{{$c->options->img}}"></a></td>
									<td>{{$c->name}}</td>
									<td><input type="text" placeholder="{{$c->qty}}" class="input-mini"></td>
									<td>{{number_format($c->price)}} đ</td>
									<td>{{number_format($c->price*$c->qty)}} đ</td>
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

						</table>
						<h4>Bạn muốn làm gì tiếp theo</h4>
						<p>Các loại mã giảm giá</p>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
							Mã giảm giá
						</label>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Thành viên VIP
						</label>
						<hr>
						<p class="cart-total right">
							<strong>Tổng tiền</strong>: {{number_format($total)}} đ<br>
							<strong>Giảm Giá</strong>: VIP--10%<br>
							<strong>VAT</strong>: 10%<br>
							<strong>Tổng hóa đơn</strong>: {{number_format($total*0.8)}} đ<br>
						</p>
						<hr/>
						<p class="buttons center">				
							<button class="btn" type="button">Cập nhật</button>
							<button class="btn" type="button">Tiếp tục</button>
							<button class="btn btn-inverse" type="submit" id="checkout">Thanh Toán</button>
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