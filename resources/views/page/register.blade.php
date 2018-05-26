@extends('master')
@section('content')
<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner_1.jpg" alt="New products" >
				<h4><span>Đăng Ký</span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
					<!-- Đây là Login -->
					<div class="span7">					
						<h4 class="title"><span class="text"><strong>Đăng</strong> Ký</span></h4>
						<form action="{{route('signin')}}" method="post" class="form-stacked">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<fieldset>

									@if(count($errors)>0)
									<div class="control-group">
									<div class="controls">
										<p style="color: red ;"">@foreach($errors->all() as $err)
											{{$err}}
											@endforeach	
										</p> 
									</div>

									</div>
									@endif
									@if(Session::has('thanhcong'))
									<div class="control-group">								                            
									<div class="control-group">
										<p style="color: red ;">{{Session::get('thanhcong')}}</p>
									</div>
									</div>
								@endif
								<div class="control-group">
									<label class="control-label">Emails</label>
									<div class="controls">
										<input type="text" name="email" placeholder="Nhập vào emails" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Họ và Tên:</label>
									<div class="controls">
										<input type="text" name="fullname" placeholder="Nhập vào họ và tên" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Địa Chỉ:</label>
									<div class="controls">
										<input type="text" name="address" placeholder="Nhập địa chỉ" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Số Điện Thoại:</label>
									<div class="controls">
										<input type="text" name="phone" placeholder="Nhập vào số điện thoại" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Nhập Mật Khẩu:</label>
									<div class="controls">
										<input type="password" name="password" placeholder="Nhập mật khẩu" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Nhập Lại Mật Khẩu:</label>
									<div class="controls">
										<input type="password" name="re_password" placeholder="Nhập lại mật khẩu" class="input-xlarge">
									</div>
								</div>
								<hr>
								<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Tạo Tài Khoản"></div>
							</fieldset>
						</form>					
					</div>				
				</div>
			</section>	
@endsection
