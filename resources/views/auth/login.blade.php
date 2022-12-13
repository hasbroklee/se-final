@extends('layouts.app')

@section('title', 'Đăng nhập')

@section('content')

    @if($errors->any())
        @foreach($errors->all() as $err)
        <p class = 'alert alert-danger'>{{ $err }}</p>
        @endforeach
    @endif
    <form class="text-center" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mb-3"><input class="form-control" type="text" name="user_name" placeholder="Tên đăng nhập" value="{{ old('id_msv') }}" style="font-family: Inter, sans-serif;" required></div>
        <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Mật khẩu" value="{{ old('password') }}" style="font-family: Inter, sans-serif;" required></div>
        <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: #6B728E;border-style: none;">Login</button></div>
        <a href="/" class="btn btn-danger d-block w-100" style="background: #6B728E;border-style: none;">Hủy</a>
    </form>
    
@endsection
