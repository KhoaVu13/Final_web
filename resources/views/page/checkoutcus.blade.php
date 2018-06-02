@extends('master')
@section('content')		
			<section class="header_text sub">
			<!-- <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" > -->
				<h4><span>Thanh Toán</span></h4>
			</section>	
			<section class="main-content">
				<div class="row">
					<div class="span12">
						<form action="{{route('thanhtoancus')}}" method="post">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
								<h4>Thông tin đơn hàng </h4>
								<a style="color: red;">
									@if(Session::has('thongbao'))
											{{Session::get('thongbao')}}<br>
									@endif 
									@foreach($errors->all() as $err)
											{{$err}}<br>
									@endforeach	
								</a>
								<input type="text" placeholder="Nhập họ tên" name="name" class="input-xlarge"><br>
								<input type="text" placeholder="Nhập giới tính" name="gender" class="input-xlarge"><br>
								<input type="text" placeholder="Nhập vào emails" name="email" class="input-xlarge"><br>
								<input type="text" placeholder="Nhập địa chỉ giao hàng" name="address" class="input-xlarge"><br>
								<input type="text" placeholder="Nhập số điện thoại người nhận" name="phone" class="input-xlarge"><br>
								<textarea name="notes"></textarea><br>
								<input type="radio" name="payment_method" value="COD"> Thanh Toán Khi Nhận Hàng<br>
								<input type="radio" name="payment_method" value="OP"> Internet Banking / Visa<br>
								<button type="submit">Bạn Muốn Giao Hàng Tới Địa Chỉ Này</button>						
						</form>
					</div>
				</div>
			</section>			
@endsection			