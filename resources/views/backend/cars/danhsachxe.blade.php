@extends('backend.master')
@section('content')
<div class="col-xs-12">
<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Type</th>
          <th>Producer</th>
          <th>Image</th>
          <th>Registration_number</th>
          <th>Đặt xe</th>
        </tr>
      </thead>
      <tbody>
      	@if(isset($allCars))
            @foreach($allCars as $car)
                <tr>
                    <td  scope="row">{{ $car->id }}</td>
                    <td>{{ $car->name }}</td>
                    <td>{{ $car->type }}</td>
                    <td>{{ $car->producer }}</td>
                    <td><img class="imgAllCars" src="{{ url('public/user/images', $car->image) }}"></td>
                    <td>{{ $car->registration_number }}</td>
                    <td></td>
                </tr>
            @endforeach
        @endif
      </tbody>
    </table>
 </div>
    {!! $allCars->render() !!}
</div>
@endsection