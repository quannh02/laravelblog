@extends('backend.master')
@section('content')
	<div class="col-xs-12 col-md-10">
	<div class="table-responsive">          
  	<table class="table table-bordered">
    	<thead>
	      <tr>
	        <th>Người dùng</th>
	        <th>Điểm đón</th>
	        <th>Điểm đến</th>
	        <th>Yêu cầu</th>
	        <th>Ngày đi</th>
	        <th>Ngày về</th>
	        <th>Duyệt</th>
	        <th>Chi tiết</th>
	        
	      </tr>
	    </thead>
	    <tbody>
	      @foreach($dondats as $dondat)
	      <tr>
	        <td><a href="{{ url('chitietnguoidung', $dondat->user_id)}}" class="btn btn-success">{{ $dondat->tendaydu }}</a></td>
	        <td>{{ $dondat->diemdon }}</td>
	        <td>{{ $dondat->diemden }}</td>
	        <td>{{ $dondat->yeucau }}</td>
	        <td>{{ date('h:m d/m/Y' , strtotime($dondat->ngaydi ))}}</td>
	        <td>{{ date('h:m d/m/Y' , strtotime($dondat->ngayve ))}}</td>
	        @if($dondat->active == 1)
	        <td>{{ 'Đã duyệt' }}</td>
	        @elseif(Auth::user()->terms == 1)
	        <td>
	        	<form action="{{ url('duyetdondat', $dondat->dondat_id )}}" method='post'>
	        		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	        		<button type="submit" class="btn btn-default">Duyệt</button>
	        	</form>
	        </td>
	        @else 
	        <td>
	      		{{ 'Chưa duyệt' }}
	        </td>
	        @endif
	        <td>
	        	<a href="{{ url('chitietdonhang', $dondat->dondat_id)}}" class="btn btn-success">Chi tiết</a>
	        </td>
				
	      </tr>
	      @endforeach
	    </tbody>
 	</table>
 	</div>
@endsection