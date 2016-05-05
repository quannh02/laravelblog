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
          <th>Hãng xe</th>
          <th>Tên</th>
          <th>Hình ảnh</th>
          <th>Số đăng ký</th>
          <th>Màu</th>
          <th>Tài xế</th>
          <th>Ngày sản xuất</th>
        </tr>
      </thead>
      <tbody>
      	@if(isset($allCars))
            @foreach($allCars as $car)
                <tr>
                    <td  scope="row">{{ $car->xe_id }}</td>
                    <td>{{ $car->hang_xe }}</td>
                    <td>{{ $car->ten_xe }}</td>
                    
                    <td><img class="img img-responsive url_hinhxe" src="{{ url('public/user/images', $car->url_hinhxe) }}" alt="{{ $car->url_hinhxe }}"></td>
                    <td>{{ $car->sodangky_xe }}</td>
                    <td>{{ $car->color }}</td>
                    <td>{{ $car->taixe_xe }}</td>
                    <td>{{ $car->ngaysanxuat }}</td>
                </tr>
            @endforeach
        @endif
      </tbody>
    </table>
 </div>
    {!! $allCars->render() !!}
</div>
@endsection