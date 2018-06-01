@extends('master')
@section('content')
<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner_1.jpg" alt="New products" >
				@if(count($product)>0)
				<h4><span>Tìm Thấy {{count($product)}} sản phẩm</span></h4>
				@else
				<h4><span>Không tìm thấy sản phẩm thỏa điều kiện</span></h4>
				@endif
			</section>
			<section class="main-content">
				<div class="row">						
					<div class="span9">						
						<ul class="thumbnails listing-products">
							@foreach($product as $sp)
							<li class="span3" style="width: 200px;">
								<div class="product-box">
									<span class="sale_tag"></span>	
									@if($sp->promotion_price!=0)
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
									@endif												
									<a href="{{route('thongtinsanpham',$sp->id)}}"><img alt="" src="themes/images/sport/{{$sp->image}}"></a><br/>
									<a href="{{route('thongtinsanpham',$sp->id)}}" class="title">{{$sp->name}}</a><br/>
									<a href="{{route('thongtinsanpham',$sp->id)}}" class="category"></a>
									@if(($sp->promotion_price)==0)
									<p class="flash-sale">{{number_format($sp->unit_price)}} ₫</p>
									@else
									<p class="flash-del">{{number_format($sp->unit_price)}} ₫</p>
									<p class="flash-sale">{{number_format($sp->promotion_price)}} ₫</p>
									@endif
								</div>
							</li>       
							@endforeach
						</ul>								
						<hr>
					</div>
				</div>
			</section>
@endsection