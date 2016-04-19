@extends('backend.master')
@section('content')
					<h1 class="page-header">
                            <small>Đặt xe</small>
                          </h1>
                          </div>
                          <!-- /.col-lg-12 -->
                          <div class="col-sm-8" style="padding-bottom:120px">
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
                           <div class="borderHinh">
							           <div class="form-group">
                                Ngày trả phương tiện:
                                <input type="text" class="form-control">
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
                
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection