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
        <td>{{ $value['image'] }}</td>
      </tr>
      	@endforeach
      @endif
    </tbody>
  </table>
  <form method="post" action="{{ url('huyxe') }}">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <button class="btn btn-success">Hủy toàn bộ</button>
  </form>
  </div>
@endsection