@extends('master')
@section('content')	
<section class="Thanhtoan">
	<section class="header_text sub">
		<!-- <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" > -->
		<h2><img src="themes/images/tuihang.png"><span>Thanh Toán</span></h2>
		<h4><span>Giao Hàng Bằng Địa Chỉ Tài Khoản Khách Hàng Đăng Nhập</span></h4>
	</section>	
	<section class="main-content">
		<div class="row">
			<div class="span12">
						<!-- <div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Checkout Options</a>
								</div>
								<div id="collapseOne" class="accordion-body in collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<h4>New Customer</h4>
												<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
												<form action="#" method="post">
													<fieldset>
														<label class="radio" for="register">
															<input type="radio" name="account" value="register" id="register" checked="checked">Register Account
														</label>
														<label class="radio" for="guest">
															<input type="radio" name="account" value="guest" id="guest">Guest Checkout
														</label>
														<br>
														<button class="btn btn-inverse" data-toggle="collapse" data-parent="#collapse2">Continue</button>
													</fieldset>
												</form>
											 </div>
											 <div class="span6">
												<h4>Returning Customer</h4>
												<p>I am a returning customer</p>
												<form action="#" method="post">
													<fieldset>
														<div class="control-group">
															<label class="control-label">Username</label>
															<div class="controls">
																<input type="text" placeholder="Enter your username" id="username" class="input-xlarge">
															</div>
														</div>
														<div class="control-group">
															<label class="control-label">Password</label>
															<div class="controls">
															<input type="password" placeholder="Enter your password" id="password" class="input-xlarge">
															</div>
														</div>
														<button class="btn btn-inverse">Continue</button>
													</fieldset>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">Account &amp; Billing Details</a>
								</div>
								<div id="collapseTwo" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<h4>Your Personal Details</h4>
												<div class="control-group">
													<label class="control-label">First Name</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Last Name</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label">Email Address</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Telephone</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Fax</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
											</div>
											<div class="span6">
												<h4>Your Address</h4>
												<div class="control-group">
													<label class="control-label">Company</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Company ID:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Address 1:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Address 2:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> City:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Post Code:</label>
													<div class="controls">
														<input type="text" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Country:</label>
													<div class="controls">
														<select class="input-xlarge">
															<option value="1">Afghanistan</option>
															<option value="2">Albania</option>
															<option value="3">Algeria</option>
															<option value="4">American Samoa</option>
															<option value="5">Andorra</option>
															<option value="6">Angola</option>
														</select>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Region / State:</label>
													<div class="controls">
														<select name="zone_id" class="input-xlarge">
															<option value=""> --- Please Select --- </option>
															<option value="3513">Aberdeen</option>
															<option value="3514">Aberdeenshire</option>
															<option value="3515">Anglesey</option>
															<option value="3516">Angus</option>
															<option value="3517">Argyll and Bute</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">Confirm Order</a>
								</div>
								<div id="collapseThree" class="accordion-body collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="control-group">
												<label for="textarea" class="control-label">Comments</label>
												<div class="controls">
													<textarea rows="3" id="textarea" class="span12"></textarea>
												</div>
											</div>									
											<button class="btn btn-inverse pull-right">Confirm order</button>
										</div>
									</div>
								</div>
							</div>
						</div>	 -->	
						@if(Session::has('thongbao'))
						{{Session::get('thongbao')}}
						@else
						<form action="{{route('thanhtoan')}}" method="post">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div style="color: red"><strong>
								@foreach($errors->all() as $err)
								{{$err}}
								@endforeach	
							</strong></div>
							<div class="thongtindonhang">				
								<div id="donhang"><h3>Thông Tin Đơn Hàng</h3></div>
								<br>
								<table class="bangthongtindonhang">
									<tr>
										<th>TÊN KHÁCH HÀNG</th>
										<th>ĐỊA CHỈ GIAO HÀNG</th>
										<th>NGÀY GIAO HÀNG</th>
									</tr>
									<tr>
										<td>{{Auth::user()->full_name}}</td>
										<td>{{Auth::user()->address}}</td>
										<td>{{date('Y-m-d')}}</td>
									</tr>
								</table>
								<br>
								<div><h4>Hàng Trong Giỏ:</h4></div>
								<div>

									@foreach($content as $c)
									<br>
									<div id="thongtindonhangleft">
										<div id="ndsanpham">
										<div >{{$c->name}}: {{$c->qty}} cái</div>
										<div>Giá: {{number_format($c->price*$c->qty)}} đ / {{$c->qty}} cái</div>
										</div>
									</div>
									<div id="thongtindonhangright">
										<img style="width: 90px ; height: 90px" src="themes/images/sport/{{$c->options->img}}">
									</div>
										@endforeach	
								</div>
							</div>
							<br>
							<br>
							<div id="tonghoadon">
								<h4>Tổng Hóa Đơn: {{number_format($subtotal)}} đ</h4>
								<div><input type="radio" name="payment_method" value="COD"> Thanh Toán Khi Nhận Hàng</div>
								<div><input type="radio" name="payment_method" value="OP"> Internet Banking / Visa</div>
								<div><label for="notes">Ghi Chú</label><textarea id="notes" name="notes"></textarea></div>
							<p class="buttons center"><button id="button" type="submit">Bạn Muốn Giao Hàng Tới Địa Chỉ Này</button></p>
							<p class="buttons center"><a href="{{route('taikhoan')}}">Lịch sử mua hàng</a></p>
						</div>
						<div>
					</form>
				</div>
				@endif
			</div>
		</section>	
	</section>			
	@endsection			