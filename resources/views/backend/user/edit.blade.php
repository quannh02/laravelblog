@extends('backend.master')
@section('content')
                        <h1 class="page-header">User
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
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
                        <form action="{{ url('user/update', $data->nguoidung_id ) }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                            <input type="hidden" name="id" value="{{ $data->id }}" >
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="txtEmail" value="{{ $data->email }}" disabled/>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="txtUser" value="{{ $data->fullname }}"/>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="txtPass" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>RePassword</label>
                                <input type="password" class="form-control" name="txtRePass" placeholder="Please Enter RePassword" />
                            </div>

                            <button type="submit" class="btn btn-default">User Edit</button>

                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection