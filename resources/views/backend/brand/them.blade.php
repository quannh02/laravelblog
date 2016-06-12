@extends('backend.master')
@section('content')
<h1 class="page-header">
                            <small>Thêm xe</small>
                          </h1>
                          </div>
                          <!-- /.col-lg-12 -->
                          <div class="col-sm-8 col-md-8 col-xs-12" style="padding-bottom:120px">
        
                        <form action="{{ url('themdanhmuc') }}" method="POST" >
                            {!! csrf_field() !!}
                           	<div class="row">
                           		<div class="col-md-2">Tên hãng</div>
                           		<div class="form-group col-md-8">
                                @if ($errors->has('hang_name'))
                                    <span class="error">{{ $errors->first('hang_name') }}</span>
                                @endif
                           			<input type="text" class="form-control" name="hang_name" value="{{ old('hang_name') }}" placeholder="Nhập hãng xe">
                           		</div>
                           	</div>
                            
                            <button type="submit" class="btn btn-default">Thêm</button>
  
                        <form>
                    </div>
                </div>
@endsection