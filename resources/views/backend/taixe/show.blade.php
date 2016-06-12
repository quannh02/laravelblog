@extends('backend.master')
@section('content')
	<div class="col-md-12">
		<div class="col-md-2"><h1>Tên tài xế: </h1></div>
		<div class="col-md-2">{{ $tai->tentaixe }}</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-2"><h1>Bằng lái xe</h1></div>
		<div class="col-md-2">{{ $tai->banglaixe }}</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-2"><h1>Sở thích</h1></div>
		<div class="col-md-6">{{ $tai->sothich }}</div>
	</div>
	<div class="col-md-12">
		<div class="col-md-2"><h1>Số điện thoại</h1></div>
		<div class="col-md-6">{{ $tai->sodienthoai }}</div>
	</div>
@endsection