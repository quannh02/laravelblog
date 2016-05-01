@extends('frontend.master')
@section('description', 'Trang tìm kiếm')
@section('content')
<div class="col-xs-9-5">
	<div class="container">
	    @if(isset($details))
	        <p> Kết quả tìm kiếm cho <b> {{ $query }} </b> là :</p>
	    <h2>Xe</h2>
	    <table class="table table-striped">
	        <thead>
	            <tr>
	                <th>Hãng xe</th>
	                <th>Số chỗ</th>
	            </tr>
	        </thead>
	        <tbody>
	            @foreach($details as $user)
	            <tr>
	                <td>{{$user->hang_xe}}</td>
	                <td>{{$user->socho_xe}}</td>
	            </tr>
	            @endforeach
	        </tbody>
	    </table>
	    @endif
	</div>
</div>
@endsection