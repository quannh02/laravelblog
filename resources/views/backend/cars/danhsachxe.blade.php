@extends('backend.master')
@section('content')
<div class="thongbao">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

    @if(isset($carChamdangkiem))
    @foreach($carChamdangkiem as $key => $value)
      @if($value['ngayconlai'] > 0)
      <p>Xe số {{ $value['sodangky_xe'] }} còn {{ $value['ngayconlai'] }} ngày để đăng kiểm</p>
      @elseif($value['ngayconlai'] == 0) 
      <p>Xe số {{ $value['sodangky_xe']}} phải đăng kiểm ngày hôm nay.</p>
      @else 
        <p>Xe số {{ $value['sodangky_xe']}} quá hạn đăng kiểm {{ abs($value['ngayconlai']) }} ngày.</p>
      @endif
    @endforeach
    @endif
  </div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
        @if(Auth::user()->terms == 1)
        <a href="{{ url('/cars/new') }}" class="btn btn-primary btn-sm pull-right" style="margin-top: 25px">
          <i class="fa fa-plus-circle" style="margin-right: 5px"></i>
          Thêm xe
        </a>
        @endif
</div>
@if(Auth::user()->terms == 0)
<div class="col-xs-12 col-md-3">
  <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" name="q" id="searchdsxeInput" placeholder="Tìm xe" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" id="searchdsxe" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
</div>
<div class="col-xs-12 col-md-4">
  <p>Bạn có thể tìm theo tên hãng, tên xe, số chỗ, tên tài xế</p>
</div>
@endif
<div class="col-xs-12">
<div class="table-responsive tabledsxe">
    <table class="table">
      <thead>
        <tr>
          <th>Số đăng ký</th>
          <th>Hãng xe</th>
          <th>Tên xe</th>
          <th>Hình ảnh</th>
          
          <th>Màu</th>
          <th>Tài xế</th>
          <th>Số chỗ</th>
          <th>Ngày sản xuất</th>
          <th>Ngày đăng kiểm</th>
          <th>{{ (Auth::user()->terms == 1) ? 'Sửa, xóa' : 'Đặt thuê'}}</th>
        </tr>
      </thead>
      <tbody>
      	@if(isset($allCars))
            @foreach($allCars as $car)
                <tr>
                    <td>{{ $car->sodangky_xe }}</td>
                    <td>{{ App\Brand::find($car->hang_id)->hang_name }}</td>
                    <td>{{ $car->ten_xe }}</td>
                    <td><img class="img img-responsive url_hinhxe" src="{{ url('public/user/images', $car->url_hinhxe) }}" alt="{{ $car->url_hinhxe }}"></td>
                    <td>{{ $car->color }}</td>
                    @if(isset($car->tai_xe_id))
                    <td><a href="{{ url('showtaixe', $car->tai_xe_id )}}">Chi tiết</a></td>
                    @else
                    <td>Chưa có</td>
                    @endif
                    <td>{{ $car->socho_xe }}</td>
                    <td><?php echo date('d/m/Y', strtotime($car->ngaysanxuat)); ?></td>
                    <td><?php echo date('d/m/Y', strtotime($car->ngaydangkiem)); ?></td>
                    
                    @if(Auth::user()->terms == 0)
                    <td>
                      <a href="{{ url('gioxe', $car->xe_id)}}" class="btn btn-success">Đặt thuê</a>
                    </td>
                    @endif
                    
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
    <div class="paginationdsxe">
    {!! $allCars->render() !!}
    </div>
</div>
@endsection