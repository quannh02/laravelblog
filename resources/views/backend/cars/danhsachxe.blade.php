@extends('backend.master')
@section('content')
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
        @if(Auth::user()->terms == 1)
        <a href="{{ url('/cars/new') }}" class="btn btn-primary btn-sm pull-right" style="margin-top: 25px">
          <i class="fa fa-plus-circle" style="margin-right: 5px"></i>
          Thêm xe
        </a>
        @endif
</div>
<div class="col-xs-12">
<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Hãng xe</th>
          <th>Tên xe</th>
          <th>Hình ảnh</th>
          <th>Số đăng ký</th>
          <th>Màu</th>
          <th>Tài xế</th>
          <th>Số chỗ</th>
          <th>Ngày sản xuất</th>
          <th>Ngày đăng kiểm</th>
          <th>Actions</th>
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
                    <td>{{ $car->socho_xe }}</td>
                    <td><?php echo date('d/m/Y', strtotime($car->ngaysanxuat)); ?></td>
                    <td><?php echo date('d/m/Y', strtotime($car->ngaydangkiem)); ?></td>
                    @if(Auth::user()->terms == 1)
                    <td>
                       <a class="btn btn-default text-right" data-toggle="tooltip" href="{{ url('cars/edit', $car->xe_id ) }}" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i></a>
                       <div class="pull-right">
                       {!! Form::open(array('url' => array('cars/destroy', $car->xe_id))) !!}
                       <button type="submit" class="btn btn-danger add-tooltip"  onclick="return xacnhanxoa('Bạn có muốn xóa không?');" data-toggle="tooltip" href="#" data-original-title="Delete" data-container="body"><i class="fa fa-times"></i></button>
                       {!! Form::close() !!}
                       </div>
                    </td>
                    @endif
                </tr>
            @endforeach
        @endif
      </tbody>
    </table>
 </div>
    {!! $allCars->render() !!}
</div>
@endsection