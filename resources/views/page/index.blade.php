@extends('master')
@section('content')
<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
				<ul class="slides">
					@foreach($slide as $sl)
						<li>
							<img src="themes/images/carousel/{{$sl->image}}" alt="" />
						</li>
						@endforeach
						@foreach($slide2 as $sl2)
						<li>
							<img src="themes/images/carousel/{{$sl2->image}}" alt="" />
							<!-- <div class="intro">
								<h1>Khuyến Mãi Hè</h1>
								<p><span>Lên Đến 50%</span></p>
								<p><span>Nhiều Sản Phẩm Chất Lượng</span></p>
							</div> -->
						</li>
						@endforeach
					</ul>
				</div>			
			</section>
			<section class="header_text">
				<b>
				4 Musketeers Shop
				<br/><u>Tìm thấy {{$count}} sản phẩm mới</u>
				</b>
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Sản Phẩm<strong> Mới</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">	
											@foreach($newproduct_0 as $np )			
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p>
															@if($np->promotion_price!=0)
																<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
															@endif
															<a href="{{route('thongtinsanpham',$np->id)}}"><img src="themes/images/sport/{{$np->image}}" alt=""/></a>
														</p>
														<a href="{{route('thongtinsanpham',$np->id)}}" class="title">{{$np->name}}</a><br/>
														<a href="" class="category"></a>
														@if($np->promotion_price!=0)
														<p class="flash-del">{{number_format($np->unit_price)}} ₫</p>
														<p class="flash-sale">{{number_format($np->promotion_price)}} ₫</p>
														@else
														<p class="flash-sale">{{number_format($np->unit_price)}} ₫</p>
														@endif
													</div>
												</li>	
											@endforeach	
											</ul>
										</div>

										<div class="item">
											<ul class="thumbnails">
												@foreach($newproduct_1 as $np1)
												<li class="span3">
													<div class="product-box">
														<p>
															@if($np1->promotion_price!=0)
																<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
															@endif
															<a href="{{route('thongtinsanpham',$np1->id)}}"><img src="themes/images/sport/{{$np1->image}}" alt="" /></a>
														</p>
														<a href="{{route('thongtinsanpham',$np1->id)}}" class="title">{{$np1->name}}</a><br/>
														<a href="{{route('thongtinsanpham',$np1->id)}}" class="category"></a>
														@if($np1->promotion_price!=0)
														<p class="flash-del">{{number_format($np1->unit_price)}} ₫</p>
														<p class="flash-sale">{{number_format($np1->promotion_price)}} ₫</p>
														@else
														<p class="flash-sale">{{number_format($np1->unit_price)}} ₫</p>
														@endif
													</div>
												</li>		
												@endforeach																							
											</ul>
										</div>


										<div class="item">
											<ul class="thumbnails">
												@foreach($newproduct_2 as $np2)
												<li class="span3">
													<div class="product-box">
														<p>
															@if($np2->promotion_price!=0)
																<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
															@endif
															<a href="{{route('thongtinsanpham',$np2->id)}}"><img src="themes/images/sport/{{$np2->image}}" alt="" /></a>
														</p>
														<a href="{{route('thongtinsanpham',$np2->id)}}" class="title">{{$np2->name}}</a><br/>
														<a href="{{route('thongtinsanpham',$np2->id)}}" class="category"></a>
														@if($np2->promotion_price!=0)
														<p class="flash-del">{{number_format($np2->unit_price)}} ₫</p>
														<p class="flash-sale">{{number_format($np2->promotion_price)}} ₫</p>
														@else
														<p class="flash-sale">{{number_format($np2->unit_price)}} ₫</p>
														@endif
													</div>
												</li>		
												@endforeach																							
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Sản Phẩm<strong> Khác</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href=""><img src="themes/images/cloth/342.jpg" alt="" /></a></p>
														<a href="" class="title"></a>Tittle<br/>
														<a href="" class="category">Link</a>
														<p class="price">Price</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href=""><img src="themes/images/cloth/342.jpg" alt="" /></a></p>
														<a href="" class="title"></a><br/>
														<a href="" class="category"></a>
														<p class="price"></p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href=""><img src="themes/images/cloth/342.jpg" alt="" /></a></p>
														<a href="" class="title"></a><br/>
														<a href="" class="category"></a>
														<p class="price"></p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href=""><img src="themes/images/cloth/342.jpg" alt="" /></a></p>
														<a href="" class="title"></a><br/>
														<a href="" class="category"></a>
														<p class="price"></p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href=""><img src="themes/images/cloth/342.jpg" alt="" /></a></p>
														<a href="" class="title"></a><br/>
														<a href="" class="category"></a>
														<p class="price"></p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href=""><img src="themes/images/cloth/342.jpg" alt="" /></a></p>
														<a href="" class="title"></a><br/>
														<a href="" class="category"></a>
														<p class="price"></p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href=""><img src="themes/images/cloth/342.jpg" alt="" /></a></p>
														<a href="" class="title"></a><br/>
														<a href="" class="category"></a>
														<p class="price"></p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href=""><img src="themes/images/cloth/342.jpg" alt="" /></a></p>
														<a href="" class="title"></a><br/>
														<a href="" class="category"></a>
														<p class="price"></p>
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>Mẫu Mã<strong> Đặc Sắc</strong></h4>
										<p>Tittle</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>Miễn Phí<strong> Giao Hàng</strong></h4>
										<p></p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>Hỗ Trợ<strong> 24/7</strong></h4>
										<p></p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Các Đối Tác</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/14.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/35.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/1.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/2.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/3.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/4.png"></a>
					</div>
				</div>
			</section>

@endsection