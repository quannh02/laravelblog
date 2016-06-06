@extends('backend.master')
@section('content')
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
        @if(Auth::user()->terms == 1)
        <a href="{{ url('themtaixe') }}" class="btn btn-primary btn-sm pull-right" style="margin-top: 25px">
          <i class="fa fa-plus-circle" style="margin-right: 5px"></i>
          Thêm tài xế
        </a>
        @endif
</div>
<div class="col-xs-12">
<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Tên</th>
          <th>Bằng lái xe</th>
          <th>Ngày sinh</th>
          <th>Sở thích</th>
          <th>Xe có thể lái</th>
          <th>Xe đang lái</th>
          <th>Actions</th>
          
        </tr>
      </thead>
      <tbody>
      	@if(isset($taixe))
            @foreach($taixe as $tai)
                <tr>
                    <td  scope="row">{{ $tai['taixe_id'] }}</td>
                    <td>{{ $tai['tentaixe'] }}</td>
                    <td>{{ $tai['banglaixe'] }}</td>
                    
                    <td><?php echo date('d/m/Y', strtotime($tai['ngaysinh'])); ?></td>
                    <td>{{ $tai['sothich'] }}</td>
                    <td>
                      @foreach($tai[0] as $value)
                      {{ $value }} 
                      @endforeach
                    </td>
                    <td>
                      @if(isset($tai[1]))
                        {{ $tai[1] }}
                      @endif
                    </td>
                    @if(Auth::user()->terms == 1)
                    <td>
                       <a class="btn btn-default text-right" data-toggle="tooltip" href="{{ url('suataixe', $tai['taixe_id'] ) }}" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i></a>
                       <div class="pull-right">
                       {!! Form::open(array('url' => array('xoataixe', $tai['taixe_id']))) !!}
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
</div>
@endsection