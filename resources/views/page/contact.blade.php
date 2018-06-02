@extends('master')
@section('content')	

<section class="google_map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3918.214904905336!2d106.8022845986127!3d10.871252770192879!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zS2h1IHBo4buRIDYsIFAuTGluaCBUcnVuZywgUS5UaOG7pyDEkOG7qWMsIFRwLkjhu5MgQ2jDrSBNaW5oLg!5e0!3m2!1svi!2s!4v1527953515926" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen scrolling="no" marginheight="0" marginwidth="0"></iframe>
			</section>
			<section class="header_text sub">
				<h4><span>Liên hệ</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">				
					<div class="span5">
						<div>
							<h5>Thông tin liên hệ</h5>
							<p><strong>Số điện thoại</strong>&nbsp;0908762832<br>
							<strong>Facebook: </strong>&nbsp; <a href=" https://www.facebook.com/khoavu131097">https://www.facebook.com/khoavu131097</a><br>
							<strong>Email: </strong>&nbsp;15520383@gmail.com								
							</p>
							<br/>
							<h5>Thông tin liên hệ</h5>
							<p><strong>Số điện thoại</strong>&nbsp;0908762832<br>
							<strong>Facebook: </strong>&nbsp; <a href=" https://www.facebook.com/khoavu131097">https://www.facebook.com/khoavu131097</a><br>
							<strong>Email: </strong>&nbsp;15520383@gmail.com								
							</p>
						</div>
					</div>
					<div class="span7">
						<p>Mọi thắc mắc xin liên hệ với chúng tôi</p>
						@if(Session::has('thongbao')){{Session::get('thongbao')}}
						@endif
						@foreach($errors->all() as $err)
											{{$err}}<br>
											@endforeach	
						<form method="post" action="{{route('lienhe')}}">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<fieldset>
								<div class="clearfix">
									<label for="name"><span>Tên:</span></label>
									<div class="input">
										<input tabindex="1" size="18" id="name" name="name" type="text" value="" class="input-xlarge" placeholder="Name">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="email"><span>Email:</span></label>
									<div class="input">
										<input tabindex="2" size="25" id="email" name="email" type="text" value="" class="input-xlarge" placeholder="Email Address">
									</div>
								</div>
								
								<div class="clearfix">
									<label for="message"><span>Lời Nhắn:</span></label>
									<div class="input">
										<textarea tabindex="3" class="input-xlarge" id="message" name="notes" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								
								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-inverse">Gửi</button>
								</div>
							</fieldset>
						</form>
					</div>				
				</div>
			</section>		
@endsection