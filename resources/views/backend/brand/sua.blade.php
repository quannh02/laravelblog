@extends('backend.master')
@section('content')
                    <div class="col-lg-12">
                        <h1 class="page-header">Sửa danh mục
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{ url('suadanhmuc', $brand->hang_id)}}" method="POST">
                            {{ csrf_field()}}
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                <input class="form-control" name="hang_name" value="{{ $brand->hang_name }}" placeholder="Nhập danh mục" />
                            </div>
                            
                            <button type="submit" class="btn btn-default">Sửa</button>
                        </form>
                    </div>
@endsection