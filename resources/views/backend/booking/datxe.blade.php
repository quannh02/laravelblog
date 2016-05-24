@extends('backend.master')
@section('content')
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4">
      <form method="post" action="{{ url('datxe') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <fieldset>
        <h2>Người đặt</h2>
        <div class="row">
         @if ($errors->has('tendaydu'))
        <span class="error">{{ $errors->first('tendaydu') }}</span>
    @endif
        <div class="form-group">Họ và tên đệm của bạn (*)
            <input type="text" value="{{ $user->tendaydu }}" class="form-control" name="tendaydu" > 
        </div>
        </div>
        <div class="row">
        @if ($errors->has('email'))
        <span class="error">{{ $errors->first('email') }}</span>
    @endif
        <div class="form-group">Email (*)
            <input type="email"  class="form-control" name="email" value="{{ $user->email }}">
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
            <input type="text"  class="form-control" value="{{ $user->sodienthoai }}" name="sodienthoai">
        </div>
        </div>
        <div class="row">
        @if ($errors->has('diachi'))
        <span class="error">{{ $errors->first('diachi') }}</span>
    @endif
        <div class="form-group">Địa chỉ (*)
             <textarea rows="4" cols="60" class="form-control" id="message" name="diachi">{{ $user->diachi }}</textarea>
        </div>
        </div>
        <div class="row">
        @if ($errors->has('tencongty'))
        <span class="error">{{ $errors->first('tencongty') }}</span>
    @endif
        <div class="form-group">Tên công ty 
            <input type="text" class="form-control" name="tencongty" value="{{ $user->tencongty }}"> 
        </div>
        </div>
        <div class="row">
        @if ($errors->has('masothue'))
        <span class="error">{{ $errors->first('masothue') }}</span>
    @endif
        <div class="form-group">Mã số thuế 
            <input type="text"  class="form-control" value="{{ $user->masothue }}" name="masothue">
        </div>
        </div>
        <h2>Thông tin đặt xe</h2>
        <div class="row">
        @if ($errors->has('diemdon'))
        <span class="error">{{ $errors->first('diemdon') }}</span>
    @endif
        <div class="form-group">Điểm đón (*)
            <input type="text" class="form-control" name="diemdon"> 
        </div>
        </div>
        <div class="row">
        @if ($errors->has('diemden'))
        <span class="error">{{ $errors->first('diemden') }}</span>
    @endif
        <div class="form-group">Điểm đến (*)
            <input type="text" class="form-control" name="diemden"> 
        </div>
        </div>
         <div class="row">
        @if ($errors->has('yeucau'))
        <span class="error">{{ $errors->first('yeucau') }}</span>
    @endif
        <div class="form-group">Yêu cầu
             <textarea rows="4" cols="60" class="form-control" id="message" name="yeucau"></textarea>
        </div>
        </div>
        <div class="row">
          @if ($errors->has('ngaydi'))
             <span class="error">{{ $errors->first('ngaydi') }}</span>
          @endif
              <div class="col-md-2">Ngày đi</div>
              <div class="form-group col-md-8">
              <input name="ngaydi" value="" class="form-control" data-provide="datepicker">
              </div>
        </div>
        <div class="row">
          @if ($errors->has('ngayve'))
             <span class="error">{{ $errors->first('ngayve') }}</span>
          @endif
              <div class="col-md-2">Ngày đi</div>
              <div class="form-group col-md-8">
              <input name="ngayve" value="" class="form-control" data-provide="datepicker">
              </div>
        </div>
        <div>
            <button type="submit" class="btn btn-success">Gửi đơn đặt</button>
        </div>
        </fieldset>
        </form>
    </div>
    <div class="col-md-6">
      <p>Danh sách xe đặt</p>
        <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Màu</th>
        <th>Số chỗ</th>
        <th>Image</th>
        <th>Biển số</th>
        <th>Năm sản xuất</th>
      </tr>
    </thead>
    <tbody>
    @if(is_array(Session::get('datxe')))
      @foreach(Session::get('datxe') as $key => $value)
      <tr>
        <td>{{ $value['id'] }}</td>
        <td>{{ $value['name'] }}</td>
        <td>{{ $value['color'] }}</td>
        <td>{{ $value['socho'] }}</td>
        <td>{{ $value['image'] }}</td>
        <td>{{ $value['bienso'] }}</td>
        <td>{{ date('Y', strtotime($value['ngaysanxuat']))}}</td>
      </tr>
        @endforeach
      @endif
    </tbody>
  </table>
   <form method="post" action="{{ url('huyxe') }}">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <button class="btn btn-success">Hủy toàn bộ</button>
  </form>
  </div>
    </div>

  </div>
@endsection
