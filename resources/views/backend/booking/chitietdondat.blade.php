@extends('backend.master')
@section('content')
<div class="col-xs-12 col-md-10">
	<div class="table-responsive">          
  	<table class="table table-bordered">
    	<thead>
	      <tr>
	      	<th>Số đăng ký</th>
	        <th>Hãng xe</th>
	        <th>Tên xe</th>
	        <th>Hình</th>
	        <th>Tài xế</th>
	        <th>Ngày sản xuất</th>
	        <th>Giá</th>
	      </tr>
	    </thead>
	    <tbody>
	    @foreach($chitiets as $chitiet)
	      <tr>
	      	<td>{{ $chitiet->sodangky_xe }}</td>
	        <td>{{ $chitiet->hang_name }}</td>
	        <td>{{ $chitiet->ten_xe }}</td>
	       
	        <td><img class="img img-responsive url_hinhxe" src="{{ url('public/user/images', $chitiet->url_hinhxe) }}" alt="{{ $chitiet->url_hinhxe }}"></td>
	        <td><a href="{{ url('showtaixe', $chitiet->tai_xe_id )}}">{{ $chitiet->tentaixe }}</a></td>
	         <td>{{ $chitiet->ngaysanxuat }}</td>
	        <td>{{ $chitiet->gia }}</td>
				
	      </tr>
	      @endforeach
	    </tbody>
 	</table>
 	</div>
@endsection