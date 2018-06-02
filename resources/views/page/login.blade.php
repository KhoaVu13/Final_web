@extends('master')
@section('content')
<!--<section class="header_text sub">
	<img class="pageBanner" src="themes/images/pageBanner_1.jpg" alt="New products" >
				<h4><span>Đăng Nhập</span></h4>
			</section>		-->	
			<section class="DangKy">	
				<div class="row">
					<div class="titleDangKy">					
						<h4 class="TieuDeDangKy"><span class="text"><strong>Đăng</strong> Nhập</span></h4>
						<form action="{{route('login')}}" method="post">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<fieldset class="fieldset">
								<div class="control-group">
									<label class="control-label"></label>
									@if(Session::has('flag'))
									<div style="color: red" class="controls">
										{{Session::get('message')}}
									</div>
									@endif
								</div>
								<table class="Bang">
									<tr>
										<td>Email:</td>
										<td><input type="text" placeholder="Nhập Emails" name="email" class="input-xlarge"></td>
									</tr>
									<tr>
										<td>Mật khẩu:</td>
										<td><input type="password" placeholder="Nhập Mật Khẩu" name="password" class="input-xlarge"></td>
									</tr>
									<tr>
										<td colspan="2" id="nutdangnhap">
											<input tabindex="3" class="nutdangnhap" type="submit" value="Đăng Nhập">
									</tr>
									<tr>
										<td colspan="2" id="Note">
											<p class="reset"><a class="lkdn" tabindex="4" href="{{route('signin')}}" title="">Tạo Tài Khoản</a></p>
										</td>
									</tr>
									<tr>
										<td colspan="2" id="Note">
											<p class="reset"><a class="lkdn" tabindex="4" href="#" title="">Quên Mật Khẩu</a></p>
										</td>
									</tr>

								</table>
							</fieldset>
						</form>				
					</div>
				</div>
</section>
@endsection