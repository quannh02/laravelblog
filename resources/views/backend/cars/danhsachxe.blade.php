@extends('backend.master')
@section('content')
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
        <a href="{{ url('/cars/new') }}" class="btn btn-primary btn-sm pull-right" style="margin-top: 25px">
          <i class="fa fa-plus-circle" style="margin-right: 5px"></i>
          Thêm xe
        </a>
</div>
<div class="col-xs-12">
<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Type</th>
          <th>Producer</th>
          <th>Image</th>
          <th>Registration_number</th>
          <th>Đặt xe</th>
        </tr>
      </thead>
      <tbody>
      	@if(isset($allCars))
            @foreach($allCars as $car)
                <tr>
                    <td  scope="row">{{ $car->xe_id }}</td>
                    <td>{{ $car->hang_xe }}</td>
                    <td>{{ $car->sodangky_xe }}</td>
                    <td></td>
                </tr>
            @endforeach
        @endif
      </tbody>
    </table>
 </div>
    {!! $allCars->render() !!}
</div>
@endsection