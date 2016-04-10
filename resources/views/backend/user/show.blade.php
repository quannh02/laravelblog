@extends('backend.master')
@section('content')
    <h1 class="page-header">User
        <small>Profile</small>
    </h1>
    </div>
    <!-- /.col-lg-12 -->
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
                <tr class="odd gradeX">
                    <td><a href="#" class="btn-link">NY531</a></td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="text-center"><span class="label label-table label-success">Enterprise</span></td>
                    <td>
                        <a class="btn btn-default add-tooltip text-right" data-toggle="tooltip" href="{{ URL::route('user.edit', $user->id)}}" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i></a>
                        <div class="pull-right">
                            <form method="POST" action="{{ route('user.destroy', $user->id) }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="id" value="{{ $user->id }}" >
                                <button type="submit" class="btn btn-danger add-tooltip"  onclick="return xacnhanxoa('Bạn có muốn xóa không?');" data-toggle="tooltip" href="#" data-original-title="Delete" data-container="body"><i class="fa fa-times"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                    <h4>Last Update</h4>
                    <p>{{ $user->updated_at->diffForHumans() }}</p>
            </tbody>
        </table>
    </div>
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
@stop