@extends('master')
@section('content')
<section class="header_text sub">
	<img class="pageBanner" src="themes/images/pageBanner_1.jpg" alt="New products" >
				<h4><span>Đăng Nhập</span></h4>
			</section>			
			<section class="main-content">	
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Đăng</strong> Nhập</span></h4>
						<form action="{{route('login')}}" method="post">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<fieldset>
								<div class="control-group">
									<label class="control-label"></label>
									@if(Session::has('flag'))
									<div style="color: red" class="controls">
										{{Session::get('message')}}
									</div>
									@endif
								</div>
								<div class="control-group">
									<label class="control-label">Emails</label>
									<div class="controls">
										<input type="text" placeholder="Nhập Emails" name="email" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Mật Khẩu</label>
									<div class="controls">
										<input type="password" placeholder="Nhập Mật Khẩu" name="password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<input tabindex="3" class="btn btn-inverse large" type="submit" value="Đăng Nhập">
									<hr>
									<p class="reset"><a tabindex="4" href="{{route('signin')}}" title="">Tạo Tài Khoản</a></p>
									<p class="reset"><a tabindex="4" href="#" title="">Quên Mật Khẩu</a></p>
								</div>
							</fieldset>
						</form>				
					</div>
				</div>
</section>
@endsection