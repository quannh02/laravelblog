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
                                                    <th>Balance</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $item)
                                                <tr class="odd gradeX">
                                                    <td><a href="#" class="btn-link">NY531</a></td>
                                                    <td>{{ $item['fullname'] }}</td>
                                                    <td>{{ $item['email'] }}</td>
                                                    <td>
                                                        <a class="btn btn-default  text-right" data-toggle="tooltip" href="{{ route('user.edit', $item['id'])}}" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i></a>
                                                        <div class="pull-right">
                                                        {!! Form::open(array('route' => array('user.destroy', $item['id']))) !!}
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