@extends('master')
@section('content')		
			<section class="header_text sub">
				<h4><span>Thông Tin Đơn Hàng</span></h4>
			</section>	
			<section class="main-content">
				<div><strong style="color: red;">Đơn hàng của bạn</strong></div><br>
				@foreach($history as $history)
				<div><a>Mã sản phẩm: {{$history->id_product}}</a></div>
				<div>Tên sản phẩm: {{$history->name}}</div>
				@if($history->promotion_price!=0)
				<div>Đơn giá: {{number_format($history->promotion_price)}} ₫</div>
				@else
				<div>Đơn giá: {{number_format($history->unit_price)}} ₫</div>
				@endif
				<div>Số lượng: {{$history->quantity}}</div>
				@if($history->promotion_price!=0)
				<div>Thành tiền sản phẩm: {{number_format($history->promotion_price*$history->quantity)}} ₫</div><br>
				@else
				<div>Thành tiền sản phẩm: {{number_format($history->unit_price*$history->quantity)}} ₫</div><br>
				@endif
				@endforeach
			</section>			
@endsection			