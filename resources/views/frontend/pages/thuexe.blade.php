@extends('frontend.master')
@section('content')
	<div class="col-md-9-5">
		<div class="col-md-3">
			<p>Bước 1: Chọn xe</p>
		</div>
		<div class="col-md-9">
			<img style="width: 300px; height: 200px;" src="{{ url('public/user/images/oto.jpg')}}" class="img img-responsive img-circle" alt="">
		</div>
		<div class="col-md-3">
			<p>Bước 2: Đặt thuê</p>
		</div>
		<div class="col-md-9">
			<img style="width: 300px; height: 200px;" src="{{ url('public/user/images/gioxe.png')}}" class="img img-responsive img-circle" alt="">
		</div>
		<div class="col-md-3">
			<p>Bước 3: Đăng nhập</p>
		</div>
		<div class="col-md-9">
			<img style="width: 300px; height: 200px;" src="{{ url('public/user/images/dangnhap.png')}}" class="img img-responsive img-circle" alt="">
		</div>
		<div class="col-md-3">
			<p>Bước 4: Gửi đơn đặt</p>
		</div>
		<div class="col-md-9">
			<img style="width: 300px; height: 200px;" src="{{ url('public/user/images/guidonhang.png')}}" class="img img-responsive img-circle" alt="">
		</div>
		<div class="col-md-3">
			<p>Bước 5: Gửi thành công và chờ chúng tôi xử lý và liên hệ ngay cho bạn</p>
		</div>
		<div class="col-md-9">
			<img style="width: 300px; height: 200px;" src="{{ url('public/user/images/telephone.jpg')}}" class="img img-responsive img-circle" alt="">
		</div>
	</div>
@endsection