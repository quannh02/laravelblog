@extends('backend.auth.master')
@section('title', 'Trang đăng ký')
@section('content')
    {!! Form::open(array('url' => 'auth/register')) !!}
        <fieldset>
        @if ($errors->has('name'))
            <span class="error">{{ $errors->first('name') }}</span>
        @endif
        <div class="form-group">Tên đầy đủ
            <input type="text" class="form-control" name="name" value="{{ old('name') }}"> 
        </div>
        @if ($errors->has('email'))
            <span class="error">{{ $errors->first('email') }}</span>
        @endif
        <div class="form-group">Email
            <input type="email"  class="form-control" name="email" value="{{ old('email') }}">
        </div>
        @if ($errors->has('password'))
            <span class="error">{{ $errors->first('password') }}</span>
        @endif
        <div class="form-group">Password
            <input type="password"  class="form-control" name="password">
        </div>
        @if ($errors->has('password_confirmation'))
            <span class="error">{{ $errors->first('password_confirmation') }}</span>
        @endif
        <div class="form-group">Confirm Password
            <input type="password"  class="form-control" name="password_confirmation">
        </div>
        <div>
            <button class="btn btn-success" type="submit">Register</button>
        </div>
        </fieldset>
    {!! Form::close() !!}
@endsection