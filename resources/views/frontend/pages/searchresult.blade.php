@extends('frontend.master')
@section('description', 'Trang tìm kiếm')
@section('content')
<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Hãng xe</th>
                <th>Số chỗ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->hang_xe}}</td>
                <td>{{$user->socho_xe}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection