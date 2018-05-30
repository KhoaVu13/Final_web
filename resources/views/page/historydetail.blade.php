@extends('master')
@section('content')		
			<section class="header_text sub">
				<h4><span>Thông Tin Đơn Hàng</span></h4>
			</section>	
			<section class="main-content">
				<div><strong style="color: red;">Đơn hàng của bạn</strong></div><br>
				@foreach($history as $his)
				@foreach($pd as $p)
				<div><a>Mã Đơn Hàng: {{$his->id_bill}}</a></div>
				<div>{{$his->id_product}}: {{$p->name}}</div>
				@endforeach
				@endforeach
				<!-- @foreach($history as $his)
				<div>{{$his->id_product}}</div>
				@endforeach -->
			</section>			
@endsection			