@extends('backend.master')
@section('content')

<!--User table-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Members</h3>
                                </div>
                    
                                <div class="panel-body">
                                    <div class="table">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="width:4ex">ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Số điện thoại</th>
                                                    <th>Tên công ty</th>
                                                    <th>Má số thuế</th>
                                                    <th>Giới tính</th>
                                                    <th>Quyền</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $item)
                                                <tr class="odd gradeX">
                                                    <td><a href="#" class="btn-link">{{ $item['nguoidung_id']}}</a></td>
                                                    <td>{{ $item['tendaydu'] }}</td>
                                                    <td>{{ $item['email'] }}</td>
                                                    <td>{{ $item['diachi'] }}</td>
                                                    <td>{{ $item['sodienthoai'] }}</td>
                                                    <td>{{ $item['tencongty'] }}</td>
                                                    <td>{{ $item['masothue'] }}</td>

                                                    <td>{{ $item['gioitinh'] }}</td>

                                                    @if($item['terms'] == 1)
                                                    <td>{{ 'Admin' }}</td>
                                                    @else
                                                    <td>{{ 'Member' }}</td>
                                                    @endif
                                                    <td>
                                                        <a class="btn btn-default  text-right" data-toggle="tooltip" href="{{ route('user.edit', $item['nguoidung_id'])}}" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i></a>
                                                        <div class="pull-right">
                                                        {!! Form::open(array('route' => array('user.destroy', $item['nguoidung_id']))) !!}
                                                        <button type="submit" class="btn btn-danger add-tooltip"  onclick="return xacnhanxoa('Bạn có muốn xóa không?');" data-toggle="tooltip" href="#" data-original-title="Delete" data-container="body"><i class="fa fa-times"></i></button>
                                                        {!! Form::close() !!}
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End user table-->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection