@extends('backend.master')
@section('content')
                    <h1 class="page-header">
                            <small>Tìm kiếm xe theo ngày</small>
                          </h1>
                          </div>
                          <!-- /.col-lg-12 -->
                          <div class="col-sm-4" style="padding-bottom:120px">
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
                           
                            <div class="col-xs-6">
                            <div class="borderHinh">
							             <div class="form-group">
                                Ngày thuê phương tiện:
                              <input name="datepickerDi" class="form-control" data-provide="datepicker">
                            </div>
                            <div class="form-group">
                              <label for="sel1">Hour:</label>
                              <select name="hourDi" class="form-control" id="sel1">
                              <?php for($i=0; $i < 10; $i++){ ?>
                              <option><?php echo '0'. $i; ?></option>
                              <?php }
                                  for($i=10; $i< 24; $i++){ 
                              ?>
                              <option><?php echo $i; ?></option>
                              <?php } ?>
                              </select>
                         </div>
            							<div class="form-group">
              								<label for="sel1">Minute:</label>
              								<select name="minuteDi" class="form-control" id="sel1">
              								<?php $minutes = array('00', '15', '30', '45'); 
              									foreach($minutes as $minute){
              								?>
                							<option><?php echo $minute; ?></option>
                							<?php } ?>
              								</select>
            							</div>
                         	</div>
                          </div>
                          
                         	 <div class="col-xs-6">
                           <div class="borderHinh">
							           <div class="form-group">
                                Ngày trả phương tiện:
                                <input name="datepickerVe" class="form-control" data-provide="datepicker">
                          </div>
                          <div class="form-group">
              								<label for="sel1">Hour:</label>
              								<select name="hourVe" class="form-control" id="sel1">
              								<?php for($i=0; $i < 10; $i++){ ?>
                              <option><?php echo '0'. $i; ?></option>
                              <?php }
                                  for($i=10; $i< 24; $i++){ 
                              ?>
                              <option><?php echo $i; ?></option>
                              <?php } ?>
              								</select>
							           </div>
            							<div class="form-group">
              								<label for="sel1">Minute:</label>
              								<select name="minuteVe" class="form-control" id="sel1">
              								<?php $minutes = array('00', '15', '30', '45'); 
              									foreach($minutes as $minute){
              								?>
                							<option><?php echo $minute; ?></option>
                							<?php } ?>
              								</select>
            							</div>
                         	</div>
                            <button type="submit" class="btn btn-default">Search</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                    </div>
                    <div class="col-xs-8">
                    <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                      <!-- select('car_types.name', 'car_types.type','car_types.producer', 'cars.id', 'cars.image', 'cars.registration_number') -->
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Type</th>
                          <th>Producer</th>
                          <th>Image</th>
                          <th>Registration_number</th>
                          <th>Đặt xe</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(isset($data))
                        @foreach($data as $item)
                        <tr>
                          <td>{{ $item->id }}</td>
                          <td>{{ $item->name }}</td>
                          <td>{{ $item->type }}</td>
                          <td>{{ $item->producer }}</td>
                          <td>{{ $item->image }}</td>
                          <td>{{ $item->registration_number }}</td>
                          <td>
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