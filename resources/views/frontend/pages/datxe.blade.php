@extends('frontend.master')
@section('description', 'Đặt xe')
@section('content')
	<div class="row">
		<div class="col-md-6">
			<p>Đặt xe không cần đăng ký</p>
			<form method="post" action="{{ url('datxe') }}">
        	<input type="hidden" name="_token" value="{{ csrf_token() }}">
        <fieldset>
       	<h2>Người đặt</h2>
       	<div class="row">
       	 @if ($errors->has('tendaydu'))
    		<span class="error">{{ $errors->first('tendaydu') }}</span>
		@endif
        <div class="form-group">Họ và tên đệm của bạn (*)
            <input type="text" class="form-control" name="tendaydu" value="{{ old('tendaydu') }}"> 
        </div>
        </div>
        <div class="row">
        @if ($errors->has('email'))
    		<span class="error">{{ $errors->first('email') }}</span>
		@endif
        <div class="form-group">Email (*)
            <input type="email"  class="form-control" name="email" value="{{ old('email') }}">
        </div>
        </div>
       	<div class="row">
        @if ($errors->has('giotinh'))
          <span class="error">{{ $errors->first('giotinh') }}</span>
          @endif
                <div>Giới tính (*)</div>
              <div class="form-group col-md-8">
               <select class="form-control" name="gioitinh">
                     <option value="1">Nam</option>
                     <option value="0">Nữ</option>
                     <option value="2">Không xác định</option>
               </select>
        </div>
        </div>
        <div class="row">
        @if ($errors->has('sodienthoai'))
    		<span class="error">{{ $errors->first('sodienthoai') }}</span>
		@endif
        <div class="form-group">Số điện thoại (*)
            <input type="text"  class="form-control" name="sodienthoai">
        </div>
        </div>
        <div class="row">
        @if ($errors->has('diachi'))
    		<span class="error">{{ $errors->first('diachi') }}</span>
		@endif
        <div class="form-group">Địa chỉ (*)
             <textarea rows="4" cols="60" class="form-control" id="message" name="diachi"></textarea>
        </div>
        </div>
        <div class="row">
        @if ($errors->has('tencongty'))
    		<span class="error">{{ $errors->first('tencongty') }}</span>
		@endif
        <div class="form-group">Tên công ty (*)
            <input type="text" class="form-control" name="tencongty" value="{{ old('name') }}"> 
        </div>
        </div>
        <div class="row">
        @if ($errors->has('masothue'))
    		<span class="error">{{ $errors->first('masothue') }}</span>
		@endif
        <div class="form-group">Mã số thuế (*)
            <input type="text"  class="form-control" name="masothue">
        </div>
        <div>
            <button type="submit" class="btn btn-success">Gửi đơn đặt</button>
        </div>
        </fieldset>
        </form>
		</div>
		<div class="col-md-6">
			<p>Thông tin xe muốn thuê</p>

		</div> 
		<!-- <div class="col-md-7">
			<p>Bạn đã có tài khoản trên hệ thống</p></br>
			<p>Để tiếp tục, vui lòng nhập địa chỉ email và mật khẩu mà bạn sử dụng cho tài khoản của bạn.</p>
			<form method="post" action="{{ url('dangnhap') }}">
     		<input type="hidden" name="_token" value="{{ csrf_token() }}">
        	<fieldset>
        	<div class="form-group">Email
            <input type="email"  class="form-control" name="email" value="{{ old('email') }}">
        	</div>
        	<div class="form-group">Password
            <input type="password"  class="form-control" name="password">
        	</div>
        	<div>
            <button type="submit" class="btn btn-success">Đăng nhập</button>
        	</div>
       	 	</fieldset>
        	</form>
		</div> -->
	</div>
@endsection
