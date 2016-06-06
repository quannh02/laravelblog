@extends('backend.master')
@section('content')
<div class="col-xs-12 col-md-10">
	<div class="table-responsive">          
  	<table class="table table-bordered">
    	<thead>
	      <tr>
	        <th>Id</th>
	        <th>Tên người dùng</th>
	        <th>Email</th>
	        <th>Số điện thoại</th>
	        <th>Tên công ty</th>
	        <th>Địa chỉ</th>
	        <th>Mã số thuế</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	      	<td>{{ $nguoidung->nguoidung_id }}</td>
	        <td>{{ $nguoidung->tendaydu }}</td>
	        <td>{{ $nguoidung->email }}</td>
	       
	        <td>{{ $nguoidung->sodienthoai }}</td>
	        <td>{{ $nguoidung->tencongty }}</td>
	         <td>{{ $nguoidung->diachi }}</td>
	        <td>{{ $nguoidung->masothue }}</td>
				
	      </tr>
	    </tbody>
 	</table>
 	</div>
@endsection