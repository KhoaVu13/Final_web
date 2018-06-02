@extends('master')
@section('content')
<!--<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner_1.jpg" alt="New products" >
				<h4><span>Đăng Ký</span></h4>
			</section>	-->		
			<section class="DangKy">				
				<div class="row">
					<!-- Đây là Login -->
					<div class="titleDangKy">					
						<h4 class="TieuDeDangKy"><span class="text"><strong>Đăng</strong> Ký</span></h4>
						<form action="{{route('signin')}}" method="post" class="form-stacked">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<fieldset class="fieldset">

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
										<table class="Bang">
											<tr>
												<td>Emails:</td>
												<td><input type="text" name="email" placeholder="Nhập vào emails" class="input-xlarge"></td>
											</tr>
											<tr>
												<td>Họ Và Tên:</td>
												<td>
													<input type="text" name="fullname" placeholder="Nhập vào họ và tên" class="input-xlarge">
												</td>
												<tr>
													<td>Địa Chỉ:</td>
													<td><input type="text" name="address" placeholder="Nhập địa chỉ" class="input-xlarge"></td>
												</tr>
												<tr>
													<td>Số Điện Thoại:</td>
													<td><input type="text" name="phone" placeholder="Nhập vào số điện thoại" class="input-xlarge"></td>
												</tr>
												<tr>
													<td>Nhập Mật Khẩu:</td>
													<td><input type="password" name="password" placeholder="Nhập mật khẩu" class="input-xlarge"></td>
												</tr>
												<tr>
													<td>Nhập lại mật khẩu:</td>
													<td><input type="password" name="re_password" placeholder="Nhập lại mật khẩu" class="input-xlarge"></td>
												</tr>
												
												<tr>
													<td colspan="2" id="nutdangky">
														<input tabindex="9" class="nutdangky" type="submit" value="Tạo Tài Khoản">
													</td>
												</tr>

											</table>
										</fieldset>
									</form>					
								</div>				
							</div>
						</section>	
						@endsection
