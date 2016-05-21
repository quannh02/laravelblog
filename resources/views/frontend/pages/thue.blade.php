@extends('frontend.master')
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
                                                    <th>Hãng</th>
                                                    <th>Tên</th>
                                                    <th>Số chỗ</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd gradeX">
                                                    <td><a href="#" class="btn-link"></a></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>

                                                    <td></td>

                                                    
                                                    <td></td>
                                              
                                                    <td>
                                                        <a class="btn btn-default  text-right" data-toggle="tooltip" href="" data-original-title="Edit" data-container="body"><i class="fa fa-pencil"></i></a>
                                                        <div class="pull-right">
                                                
                                                        <button type="submit" class="btn btn-danger add-tooltip"  onclick="return xacnhanxoa('Bạn có muốn xóa không?');" data-toggle="tooltip" href="#" data-original-title="Delete" data-container="body"><i class="fa fa-times"></i></button>
       
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End user table-->
@endsection