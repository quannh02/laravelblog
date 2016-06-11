@extends('backend.master')
@section('content')
<script type="text/javascript">
            
            $(function () {
                var yesterday = new Date();
                yesterday.setDate(yesterday.getDate() - 1);
                $('#datetimepicker3').datetimepicker({
                  minDate: yesterday
                });
                $('#datetimepicker4').datetimepicker({
                  minDate: yesterday
                });
                //Important!
                $('#datetimepicker4').datetimepicker({
                  useCurrent: false
                });
                $('#datetimepicker3').on('dp.change', function(e){
                  $('#datetimepicker4').data("DateTimePicker").minDate(e.date);
                });
                $('#datetimepicker4').on('dp.change', function(e){
                  $('#datetimepicker3').data("DateTimePicker").maxDate(e.date);
                });
            });
        </script>
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-4 h1datxe">
    <div class="khungdatxe">
      <form method="post" action="{{ url('datxe') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <fieldset>
        <h1><strong>Người đặt</strong></h1>
        <div class="row">
         @if ($errors->has('tendaydu'))
        <span class="error">{{ $errors->first('tendaydu') }}</span>
    @endif
        <div class="form-group">Họ và tên đệm của bạn (*)
            <input type="text" value="{{ $user->tendaydu }}" class="form-control" name="tendaydu" > 
        </div>
        @if ($errors->has('email'))
        <span class="error">{{ $errors->first('email') }}</span>
    @endif
        <div class="form-group">Email
            <input type="email"  class="form-control" name="email" value="{{ $user->email }}">
        </div>
        @if ($errors->has('giotinh'))
          <span class="error">{{ $errors->first('giotinh') }}</span>
          @endif
                <div>Giới tính (*)</div>
              <div class="form-group">
               <select class="form-control" name="gioitinh">
                     <option value="1">Nam</option>
                     <option value="0">Nữ</option>
                     <option value="2">Không xác định</option>
               </select>
              </div>
        @if ($errors->has('sodienthoai'))
        <span class="error">{{ $errors->first('sodienthoai') }}</span>
    @endif
        <div class="form-group">Số điện thoại (*)
            <input type="text"  class="form-control" value="{{ $user->sodienthoai }}" name="sodienthoai">
        </div>
        @if ($errors->has('diachi'))
        <span class="error">{{ $errors->first('diachi') }}</span>
    @endif
        <div class="form-group">Địa chỉ (*)
             <textarea rows="4" cols="60" class="form-control" id="message" name="diachi">{{ $user->diachi }}</textarea>
        </div>
        @if ($errors->has('tencongty'))
        <span class="error">{{ $errors->first('tencongty') }}</span>
    @endif
        <div class="form-group">Tên công ty 
            <input type="text" class="form-control" name="tencongty" value="{{ $user->tencongty }}"> 
        </div>
        @if ($errors->has('masothue'))
        <span class="error">{{ $errors->first('masothue') }}</span>
    @endif
        <div class="form-group">Mã số thuế 
            <input type="text"  class="form-control" value="{{ $user->masothue }}" name="masothue">
        </div>
        <h2>Thông tin đặt xe</h2>
        @if ($errors->has('diemdon'))
        <span class="error">{{ $errors->first('diemdon') }}</span>
    @endif
        <div class="form-group">Điểm đón (*)
            <input type="text" class="form-control" name="diemdon"> 
        </div>
        @if ($errors->has('diemden'))
        <span class="error">{{ $errors->first('diemden') }}</span>
    @endif
        <div class="form-group">Điểm đến (*)
            <input type="text" class="form-control" name="diemden"> 
        </div>

        @if ($errors->has('yeucau'))
        <span class="error">{{ $errors->first('yeucau') }}</span>
    @endif
        <div class="form-group">Yêu cầu
             <textarea rows="4" cols="60" class="form-control" id="message" name="yeucau"></textarea>
        </div>

          @if ($errors->has('ngaydi'))
             <span class="error">{{ $errors->first('ngaydi') }}</span>
          @endif
              <div>Ngày đi (*)</div>
              <div class="form-group">
              <div class='input-group date' id='datetimepicker3'>
                <input name="ngaydi" type='text' class="form-control" />
                  <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                    </span>
              </div>
              </div>
          @if ($errors->has('ngayve'))
             <span class="error">{{ $errors->first('ngayve') }}</span>
          @endif
              <div>Ngày về (*)</div>
              <div class="form-group">
                <div class='input-group date' id='datetimepicker4'>
                    <input name="ngayve" type='text' class="form-control" />
                    <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
              </div>
        <div>
            <button type="submit" class="btn btn-success">Gửi đơn đặt</button>
        </div>
        </div>
        </fieldset>
        </form>
        </div>
    </div>
    <div class="col-md-6 h1datxe">
      <h1><strong>Danh sách xe đặt</strong></h1>
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
        <td><img class="img img-responsive img_car_list" src="{{ url('public/user/images', $value['image']) }}"></td>
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
