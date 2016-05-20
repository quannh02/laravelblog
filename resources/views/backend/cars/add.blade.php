@extends('backend.master')
@section('content')
<h1 class="page-header">
                            <small>Thêm xe</small>
                          </h1>
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
                        <form action="{{ url('cars/new') }}" method="POST"  enctype="multipart/form-data">
                            {!! csrf_field() !!}
                           	<div class="row">
                           		<div class="col-md-2">Tên tài xế</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="tentaixe" value="{{ old('tentaixe') }}" placeholder="Nhập tên tài xế">
                           		</div>
                           	</div>
                            <div class="row">
                              <div class="col-md-2">Bằng lái xe</div>
                              <div class="form-group col-md-8">
                                <input type="text" class="form-control" name="banglaixe" value="{{ old('banglaixe') }}" placeholder="Nhập bằng lái xe">
                              </div>
                            </div>
                           	<div class="row">
                           		<div class="col-md-2">Ngày sinh</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" name="ngaysinh" value="{{ old('ngaysinh') }}" placeholder="Nhập ngày sinh">
                           		</div>
                           	</div>
                      
                           	<div class="row">
                           		<div class="col-md-2">Sở thích</div>
                           		<div class="form-group col-md-8">
                           			<input type="text" class="form-control" value="{{ old('sothich') }}" name="sothich" placeholder="Nhập sở thích">
                           		</div>
                           	</div>
                           	
                           
                           	
                  
                            <button type="submit" class="btn btn-default">Thêm</button>
                        <form>
                    </div>
                </div>
@endsection