@extends('backend.master')
@section('content')
	<div class="col-xs-12 col-md-10">
	<div class="table-responsive">          
  	<table class="table table-bordered">
    	<thead>
	      <tr>
	        <th>Id</th>
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
	      @foreach($dondats as $key => $dondat)
	      <tr>
	        <td>{{ $dondat['dondat_id']}}</td>
	        <td>{{ $dondat['diemdon']}}</td>
	        <td>{{ $dondat['diemden']}}</td>
	        <td>{{ $dondat['yeucau']}}</td>
	        <td>{{ date('h:m d/m/Y' , strtotime($dondat['ngaydi']))}}</td>
	        <td>{{ date('h:m d/m/Y' , strtotime($dondat['ngayve']))}}</td>
	        @if($dondat['active'] == 1)
	        <td>{{ 'Đã duyệt' }}</td>
	        @elseif(Auth::user()->terms == 1)
	        <td>
	        	<form action="{{ url('duyetdondat', $dondat['dondat_id'] )}}" method='post'>
	        		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	        		<button type="submit" class="btn btn-default">Duyệt</button>
	        	</form>
	        </td>
	        @else 
	        <td>
	      		{{ 'Chưa duyệt' }}
	        </td>
	        @endif
	        <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal{{ $dondat['dondat_id'] }}">Xem</button>

				<!-- Modal -->
				<div id="myModal{{ $dondat['dondat_id'] }}" class="modal fade" role="dialog">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Chi tiết đơn đặt</h4>
				      </div>
				      <div class="modal-body">
				      	<div class="table-responsive">   
				       		<table class="table table-bordered">
							    <thead>
							      <tr>
							        <th>Xe</th>
							        <th>Số chỗ</th>
							        <th>Số biển</th>
							       	<th>Tài xế</th>
							        <th>Giá</th>
							      </tr>
							    </thead>
							    <tbody>
							    @foreach($dondat[0] as $key => $chitiet)
							      <tr>
							        <td>{{ $chitiet['hang_name'] }} {{ $chitiet['ten_xe']}}</td>
							        <td>{{ $chitiet['socho_xe'] }}</td>
							        <td>{{ $chitiet['sodangky_xe'] }}</td>
							        <td>{{ $chitiet['tentaixe'] }}</td>
							        <td>{{ $chitiet['gia'] }}</td>
							      </tr>
							   	@endforeach
							    </tbody>
							  </table>
							  </div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>

				  </div>
				</div></td>
				
	      </tr>
	      @endforeach
	    </tbody>
 	</table>
 	</div>
@endsection