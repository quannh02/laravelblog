@extends('backend.master')
@section('content')
                    <div class="col-md-4">
                        <h1 class="page-header">Hãng
                            <small>xe</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-md-5">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Sửa/Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($brands as $brand)
                            <tr class="odd gradeX" align="center">
                                <td>{{ $brand->hang_id }}</td>
                                <td>{{ $brand->hang_name }}</td>
                                @if(Auth::user()->terms == 1)
                                <td>
                                   <a class="btn btn-default text-right" data-toggle="tooltip" href="{{ url('suadanhmuc', $brand->hang_id) }}" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i></a>
                                   <div class="pull-right">
                                   {!! Form::open(array('url' => array('xoadanhmuc', $brand->hang_id))) !!}
                                   <button type="submit" class="btn btn-danger add-tooltip"  onclick="return xacnhanxoa('Bạn có muốn xóa không?');" data-toggle="tooltip" href="#" data-original-title="Delete" data-container="body"><i class="fa fa-times"></i></button>
                                   {!! Form::close() !!}
                                   </div>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <a class="btn btn-success" href="{{ url('themdanhmuc') }}">Thêm hãng</a>
                    </div>
@endsection