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
				<div>Tổng Tiền: {{number_format($a->total)}} VNĐ</div>
				<div>Trạng thái đơn hàng: </div><br>
				@endforeach
			</section>			
@endsection			