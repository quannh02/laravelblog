@extends('backend.master')
@section('content')
<h2 class="page-header">
                          Thêm tin tức
                          </h2>
                          </div>
                          <!-- /.col-lg-12 -->
                          <div class="col-sm-8 col-md-8 col-xs-12" style="padding-bottom:120px">
                          @if(count($errors) > 0)
                              <div class="alert alert-danger">
                                  <ul>
                                      @foreach($errors->all() as $error)
                                          <li>{!! $error !!}</li>
                                      @endforeach
                                  </ul>
                              </div>
                          @endif
                          @if(Session::has('flash_message'))
                              <div class="alert alert-{{ Session::get('flash_level')}}">{{ Session::get('flash_message') }}</div>
                          @endif
                        <form action="{{ url('tintuc/update', $data->id) }}" method="POST">
                            {!! csrf_field() !!}
                           	<div class="row">
                           		<div class="col-md-2">Tiêu đề</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="tieude" value="{{ $data->tieude }}" placeholder="Nhập tieu de">
                           		</div>
                           	</div>
                           	<div class="row">
                           		<div class="col-md-2">Nội dung</div>
                           		<div class="form-group col-md-8">
                           			<textarea type="text" class="form-control" name="noidung" placeholder="Nhập noi dung">{{ $data->noidung }}</textarea>
                           		</div>
                           	</div>
                          
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-reset btn-default">Reset</button>
                        <form>
                    </div>
                </div>
@endsection