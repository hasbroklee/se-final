@extends('layouts.app')

@section('title', 'Đổi mật khẩu')

@section('content')

    @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif
    @if($errors->any())
        @foreach($errors->all() as $err)
        <p class = 'alert alert-danger'>{{ $err }}</p>
        @endforeach
    @endif
    <form class="text-center" action="/users/reset_password/{{ Auth::user()->user_name }}" method="post">
        @csrf
        <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Mật khẩu mới" style="font-family: Inter, sans-serif;" required></div>
        <div class="mb-3"><input class="form-control" type="password" name="password_cofirmation" placeholder="Xác nhận mật khẩu mới" style="font-family: Inter, sans-serif;" required></div>
        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" onclick="return confirm('Bạn muốn đổi mật khẩu tài khoản này?');"
                                                                        style="background: #6B728E;border-style: none;" >Đổi</button></div>
        @guest
            @if (Route::has('login'))
            @endif
        @else
            @if (Auth::user()->role_as == 1)
                <a href="/admin/dashboard" class="btn btn-danger d-block w-100" style="border-style: none;">Quay lại</a>    
            @else
                <a href="/" class="btn btn-danger d-block w-100" style="border-style: none;">Quay lại</a>
            @endif
        @endguest
        
    </form>
    
@endsection
