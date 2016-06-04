@extends('frontend.master')
@section('content')
	<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Màu</th>
        <th>Số chỗ</th>
        <th>Image</th>
        <th>Biển số</th>
        <th>Năm sản xuất</th>
      </tr>
    </thead>
    <tbody>
    @if(is_array(Session::get('datxe')))
    	@foreach(Session::get('datxe') as $key => $value)
      <tr>
        <td>{{ $value['id'] }}</td>
        <td>{{ $value['name'] }}</td>
        <td>{{ $value['color'] }}</td>
        <td>{{ $value['socho'] }}</td>
        <td><img class="img img-responsive img_car_list" src="{{ url('public/user/images', $value['image']) }}"></td>
        <td>{{ $value['bienso'] }}</td>
        <td>{{ date('Y', strtotime($value['ngaysanxuat']))}}</td>
      </tr>
      	@endforeach
      @endif
    </tbody>
  </table>
  <form method="post" action="{{ url('huyxe') }}">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <button class="btn btn-success">Hủy toàn bộ</button>
  </form>
  
   <a class="btn btn-success pull-right" href="{{ url('datxe')}}">Đặt xe</a>
  </div>
@endsection