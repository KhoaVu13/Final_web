@extends('master')
@section('content')		
			<section class="header_text sub">
				<h4><span>Thanh Toán</span></h4>
			</section>	
			<section class="main-content">
				<div><strong style="color: red;">Đơn hàng của bạn</strong></div><br>
				@foreach($acc as $a)
				<div><a href="{{route('lichsu',$a->id)}}">Mã Đơn Hàng: {{$a->id}}</a></div>
				<div>Ngày mua: {{$a->date_order}}</div>
				<div>Tổng Tiền: {{number_format($a->total)}} ₫</div>
				<div>Hình thức thanh toán: {{$a->payment}}</div>
				@if($a->status == 'DXL')
				<div>Trạng thái đơn hàng: <strong>Đang xử lý</strong></div><br>
				@elseif($a->status == 'DVC')
				<div>Trạng thái đơn hàng: Đang xử lý ----- <strong>Đang vận chuyển</strong> </div><br>
				@elseif($a->status == 'DTT')
				<div>Trạng thái đơn hàng: Đang xử lý ----- Đang vận chuyển ----- <strong>Đã thanh toán</strong></div><br>
				@endif
				@endforeach
			</section>			
@endsection			