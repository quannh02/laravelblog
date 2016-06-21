@extends('backend.master')
@section('content')
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
        <a href="{{ url('themtintuc') }}" class="btn btn-primary btn-sm pull-right" style="margin-top: 25px">
          <i class="fa fa-plus-circle" style="margin-right: 5px"></i>
          Thêm tin tuc
        </a>
</div>
<div class="col-xs-12">
<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Tieu de</th>
          <th>Noi dung</th>
          <th>Tac gia</th>
          <th>Sửa/Xóa</th>
        </tr>
      </thead>
      <tbody>
      @foreach($tintuc as $key => $value)
                <tr>
                
                    <td  scope="row">{{ $value->id }}</td>
                    <td>{{ $value->tieude }}</td>
                    <td>{{ $value->noidung }}</td>
                    <td>{{ $value->tacgia }}</td>
                    <td  style="width: 80px;">
                       <a class="btn btn-default  text-right" data-toggle="tooltip" href="{{ url('tintuc/edit', $value->id ) }}" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i></a>
                       <div class="pull-right">
                       {!! Form::open(array('url' => array('tintuc/destroy', $value->id))) !!}
                       <button type="submit" class="btn btn-danger add-tooltip"  onclick="return xacnhanxoa('Bạn có muốn xóa không?');" data-toggle="tooltip" href="#" data-original-title="Delete" data-container="body"><i class="fa fa-times"></i></button>
                       {!! Form::close() !!}
                       </div>
                    </td>
                </tr>
       @endforeach
      </tbody>
    </table>
 </div>
</div>
@endsection