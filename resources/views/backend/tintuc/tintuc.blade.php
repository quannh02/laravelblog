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
        </tr>
      </thead>
      <tbody>
      @foreach($tintuc as $key => $value)
                <tr>
                
                    <td  scope="row">{{ $value->id }}</td>
                    <td>{{ $value->tieude }}</td>
                    <td>{{ $value->noidung }}</td>
                    <td>{{ $value->tacgia }}</td>
               
                </tr>
       @endforeach
      </tbody>
    </table>
 </div>
</div>
@endsection