@extends('admin.master')
@section('content')

<!--User table-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-control">
                                        <a class="fa fa-question-circle fa-lg fa-fw unselectable add-tooltip" href="#" data-original-title="<h4 class='text-thin'>Information</h4><p style='width:150px'>This is an information bubble to help the user.</p>" data-html="true" title=""></a>
                                    </div>
                                    <h3 class="panel-title">Member</h3>
                                </div>
                    
                                <div class="panel-body">
                                    <div class="pad-btm form-inline">
                                        <div class="row">
                                            <div class="col-sm-6 table-toolbar-left">
                                                <button id="demo-btn-addrow" class="btn btn-purple btn-labeled fa fa-plus">Add</button>
                                                <div class="btn-group btn-group">
                                                    <button class="btn btn-default"><i class="fa fa-exclamation-circle"></i></button>
                                                    <button class="btn btn-default"><i class="fa fa-trash"></i></button>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 table-toolbar-right">
                                                <div class="btn-group">
                                                    <div class="btn-group">
                                                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                                                            <i class="fa fa-cog"></i>
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul role="menu" class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="#">Action</a></li>
                                                            <li><a href="#">Another action</a></li>
                                                            <li><a href="#">Something else here</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Separated link</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered nowrap dataTable collapsed" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th style="width:4ex">ID</th>
                                                    <th>Name</th>
                                                    <th>Balance</th>
                                                    <th class="text-center">Subscription</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $item)
                                                <tr class="odd gradeX">
                                                    <td><a href="#" class="btn-link">NY531</a></td>
                                                    <td>{{ $item['fullname'] }}</td>
                                                    <td>{{ $item['email'] }}</td>
                                                    <td class="text-center"><span class="label label-table label-success">Enterprise</span></td>
                                                    <td>
                                                        <a class="btn btn-default add-tooltip text-right" data-toggle="tooltip" href="{{ URL::route('user.edit', $item['id'])}}" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i></a>
                                                        <div class="pull-right">
                                                        <form method="POST" action="{{ route('user.destroy', $item['id']) }}">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="id" value="{{ $item['id'] }}" >
                                                        <button type="submit" class="btn btn-danger add-tooltip"  onclick="return xacnhanxoa('Bạn có muốn xóa không?');" data-toggle="tooltip" href="#" data-original-title="Delete" data-container="body"><i class="fa fa-times"></i></button>
                                                        </form>
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