@extends('master')
@section('content')
<section class="header_text sub">
			<img class="pageBanner" src="themes/images/carousel/banner-6.jpg" alt="New products" >
				<h4><span></span></h4>
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
								<a href="themes/images/sport/{{$sanpham->image}}" class="thumbnail" data-fancybox-group="group1" title="Sản phẩm 1"><img alt="" src="themes/images/sport/{{$sanpham->image}}"></a>												
								<ul class="thumbnails small">								
									<li class="span1">
										<a href="themes/images/sport/2.jpg" class="thumbnail" data-fancybox-group="group1" title="Sản phẩm 2"><img src="themes/images/sport/2.jpg" alt=""></a>
									</li>								
									<li class="span1">
										<a href="themes/images/sport/3.jpg" class="thumbnail" data-fancybox-group="group1" title="Sản Phẩm 3"><img src="themes/images/sport/3.jpg" alt=""></a>
									</li>													
									<li class="span1">
										<a href="themes/images/sport/4.jpg" class="thumbnail" data-fancybox-group="group1" title="Sản Phảm 4"><img src="themes/images/sport/4.jpg" alt=""></a>
									</li>
									<li class="span1">
										<a href="themes/images/sport/5.jpg" class="thumbnail" data-fancybox-group="group1" title="Sản Phẩm 5"><img src="themes/images/sport/5.jpg" alt=""></a>
									</li>
								</ul>
							</div>
							<div class="span5">
								<address>
									<strong>Xuất xứ : </strong> <span>{{$sanpham->NSX}}</span><br>
									<strong>Mã sản phẩm : </strong> <span>{{$sanpham->id}}</span><br>
									<strong>Điểm tích lũy : </strong> <span>0</span><br>
									<strong>Tình trạng : </strong> 
									<span>
										@if($sanpham->qty>0)
										<b style="color:green;">Còn hàng</b>
										@else
										<b style="color:red;">Hết hàng</b>
										@endif
									</span><br>					

								</address>									
								<h4><strong>
									@if($sanpham->promotion_price!=0)
									Giá bán : {{number_format($sanpham->promotion_price)}} đ
									@else
									Giá bán : {{number_format($sanpham->unit_price)}} đ
									@endif
								</strong></h4>
							</div>
							<div class="span5">
								<form class="form-inline">
									<label class="checkbox">
										<input type="checkbox" value=""> Đen
									</label>
									<br/>
									<label class="checkbox">
									  <input type="checkbox" value=""> Xanh lá cây
									</label>
									<p>&nbsp;</p>
									<label>Số lượng:</label>
									<input type="text" class="span1" placeholder="1">
									<a href="{{route('muahang',$sanpham->id)}}" class="btn btn-inverse" type="submit">Thêm vào giỏ</a>
								</form>
							</div>							
						</div>
						<div class="row">
							<div class="span9">
								<ul class="nav nav-tabs" id="myTab">
									<li class="active"><a href="#home">Description</a></li>
									<li class=""><a href="#profile">Additional Information</a></li>
								</ul>							 
								<div class="tab-content">
									<div class="tab-pane active" id="home">{{$sanpham->description}}</div>
									<div class="tab-pane" id="profile">
										<table class="table table-striped shop_attributes">	
											<tbody>
												<tr class="">
													<th>Size</th>
													<td>Large, Medium, Small, X-Large</td>
												</tr>		
												<tr class="alt">
													<th>Colour</th>
													<td>Orange, Yellow</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>							
							</div>						
							<div class="span9">	
								<br>
								<h4 class="title">
									<span class="pull-left"><span class="text"><strong>Related</strong> Products</span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-1" data-slide="prev"></a><a class="right button" href="#myCarousel-1" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-1" class="carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails listing-products">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href=""><img alt="" src="themes/images/ladies/6.jpg"></a><br/>
														<a href="" class="title">Wuam ultrices rutrum</a><br/>
														<a href="#" class="category">Suspendisse aliquet</a>
														<p class="price">$341</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href=""><img alt="" src="themes/images/ladies/5.jpg"></a><br/>
														<a href="" class="title">Fusce id molestie massa</a><br/>
														<a href="#" class="category">Phasellus consequat</a>
														<p class="price">$341</p>
													</div>
												</li>       
												<li class="span3">
													<div class="product-box">												
														<a href=""><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
														<a href="" class="title">Praesent tempor sem</a><br/>
														<a href="#" class="category">Erat gravida</a>
														<p class="price">$28</p>
													</div>
												</li>												
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails listing-products">
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href=""><img alt="" src="themes/images/ladies/1.jpg"></a><br/>
														<a href="" class="title">Fusce id molestie massa</a><br/>
														<a href="#" class="category">Phasellus consequat</a>
														<p class="price">$341</p>
													</div>
												</li>       
												<li class="span3">
													<div class="product-box">												
														<a href=""><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
														<a href="">Praesent tempor sem</a><br/>
														<a href="#" class="category">Erat gravida</a>
														<p class="price">$28</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>												
														<a href=""><img alt="" src="themes/images/ladies/3.jpg"></a><br/>
														<a href="" class="title">Wuam ultrices rutrum</a><br/>
														<a href="#" class="category">Suspendisse aliquet</a>
														<p class="price">$341</p>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								<li><a href="">Nullam semper elementum</a></li>
								<li class="active"><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li>
								<li><a href="products.html">Nullam semper elementum</a></li>
								<li><a href="products.html">Phasellus ultricies</a></li>
								<li><a href="products.html">Donec laoreet dui</a></li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="products.html">Adidas</a></li>
								<li><a href="products.html">Nike</a></li>
								<li><a href="products.html">Dunlop</a></li>
								<li><a href="products.html">Yamaha</a></li>
							</ul>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
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
													<a href=""><img alt="" src="themes/images/ladies/7.jpg"></a><br/>
													<a href="" class="title">Fusce id molestie massa</a><br/>
													<a href="#" class="category">Suspendisse aliquet</a>
													<p class="price">$261</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<a href=""><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
													<a href="" class="title">Tempor sem sodales</a><br/>
													<a href="#" class="category">Urna nec lectus mollis</a>
													<p class="price">$134</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="block">								
							<h4 class="title"><strong>Best</strong> Seller</h4>								
							<ul class="small-product">
								<li>
									<a href="#" title="Praesent tempor sem sodales">
										<img src="themes/images/ladies/1.jpg" alt="Praesent tempor sem sodales">
									</a>
									<a href="#">Praesent tempor sem</a>
								</li>
								<li>
									<a href="#" title="Luctus quam ultrices rutrum">
										<img src="themes/images/ladies/2.jpg" alt="Luctus quam ultrices rutrum">
									</a>
									<a href="#">Luctus quam ultrices rutrum</a>
								</li>
								<li>
									<a href="#" title="Fusce id molestie massa">
										<img src="themes/images/ladies/3.jpg" alt="Fusce id molestie massa">
									</a>
									<a href="#">Fusce id molestie massa</a>
								</li>   
							</ul>
						</div>
					</div>
				</div>
			</section>

@endsection