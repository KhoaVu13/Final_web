@extends('master')
@section('content')
<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner_1.jpg" alt="New products" >
				<h4><span>Login or Regsiter</span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
						<form action="#" method="post">
							<input type="hidden" name="next" value="/">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input type="text" placeholder="Enter your username" id="username" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Username</label>
									<div class="controls">
										<input type="password" placeholder="Enter your password" id="password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit" value="Sign into your account">
									<hr>
									<p class="reset">Recover your <a tabindex="4" href="#" title="Recover your username or password">username or password</a></p>
								</div>
							</fieldset>
						</form>				
					</div>
					<div class="span7">					
						<h4 class="title"><span class="text"><strong>Đăng</strong> Ký</span></h4>
						<form action="#" method="post" class="form-stacked">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Emails</label>
									<div class="controls">
										<input type="text" name="emails" placeholder="Nhập vào emails" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Họ và Tên:</label>
									<div class="controls">
										<input type="password" name="fullname" placeholder="Nhập vào họ và tên" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Địa Chỉ:</label>
									<div class="controls">
										<input type="password" name="address" placeholder="Nhập địa chỉ" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Số Điện Thoại:</label>
									<div class="controls">
										<input type="password" name="phone" placeholder="Nhập vào số điện thoại" class="input-xlarge">
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
								@if(Session::has('thanhcong'))								                            
								<div class="control-group">
									<p>{{Session::get('thanhcong')}}</p>
								</div>
								@endif
								<hr>
								<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Tạo Tài Khoản"></div>
							</fieldset>
						</form>					
					</div>				
				</div>
			</section>	
@endsection
