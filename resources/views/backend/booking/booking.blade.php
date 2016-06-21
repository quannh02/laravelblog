@extends('backend.master')
@section('content')
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
            $(function(){
                $('#datetimepicker2').datetimepicker();
            });
        </script>
                    <h1 class="page-header">
                            <small>Tìm kiếm xe theo ngày</small>
                          </h1>
                          </div>
                          <!-- /.col-lg-12 -->
                          <div class="col-md-12" style="padding-bottom:120px">
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
                        <form action="{{ url('list/car') }}" method="POST">
                            {!! csrf_field() !!}
                           
                            <div class="col-md-4">
                            <div class="borderHinh">
                              <div class="form-group">
                                   <h2>Ngày thuê phương tiện:</h2>
                                  <div class='input-group date' id='datetimepicker1'>
                                      <input name="datepickerDi" value="{{ old('datepickerDi')}}" type='text' class="form-control" />
                                      <span class="input-group-addon">
                                          <span class="glyphicon glyphicon-calendar"></span>
                                      </span>
                                  </div>
                              </div>
                            
                         	  </div>
                            </div>
                          
                         	 <div class="col-md-4">
                           <div class="borderHinh">
                               <div class="form-group">
                                    <h2>Ngày trả phương tiện:</h2>
                                    <div class='input-group date' id='datetimepicker2'>
                                        <input name="datepickerVe" type='text' class="form-control" />
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                           
                         	  </div>
                            <button type="submit" class="btn btn-default">Search</button>
                        <form>
                    </div>
                    </div>
                    <div class="col-md-12">
                    </div>
                    <div class="col-md-12">
                    <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                      <!-- select('car_types.name', 'car_types.type','car_types.producer', 'cars.id', 'cars.image', 'cars.registration_number') -->
                        <tr>
                          <th>Biển số</th>
                          <th>Hãng id</th>
                          <th>Tên xe</th>
                          <th>Hình</th>
                          <th>Ngày sản xuất</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(isset($data))
                        @foreach($data as $item)
                        <tr>
                          <td>{{ $item->sodangky_xe }}</td>
                          <td>{{ $item->hang_name }}</td>
                          <td>{{ $item->ten_xe }}</td>
                          <td><img style="width:250px; height:160px;" src="{{ url('public/user/images', $item->url_hinhxe) }}" alt=""></td>
                          <td>{{ $item->ngaysanxuat }}</td>
                        </tr>
                        @endforeach
                        @endif
                      </tbody>
                    </table>
                    </div>
                    </div>
                </div>
                
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection