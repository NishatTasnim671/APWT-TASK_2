@extends('layouts.navbar')
@section('content')
    <form action="{{route('login')}}" method="post">
        
        {{csrf_field()}}

        <div>
            <span>Name</span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        
        <div >
        <span>Password</span>
            <input type="password" name="password" value="{{old('password')}}" >
              </div>
              @error('password')
                      <span >{{$message}}</span>
                    @enderror
        <input type="submit"  value="Log In" >
    </form>
@endsection 