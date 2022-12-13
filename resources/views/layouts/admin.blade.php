<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.backend.css')

    @livewireStyles
</head>
<body class="d-flex flex-column" style="background: #404258;width: 100%;height: 100%;">
    @include('layouts.frontend.header')

    <div class="card" style="margin-top: 20px;margin-right: 27px;margin-left: 27px;border-radius: 10px;border-color: #474E68;">
        <div class="card-header" style="background: #474E68;">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
                <li class="nav-item" style="font-family: Inter, sans-serif;"><a class="nav-link active" id="item-1-1-tab" role="tab" aria-controls="item-1-1" aria-selected="true" href="#item-1-1" data-bs-toggle="tab">Quản lý bài viết</a></li>
                <li class="nav-item"><a class="nav-link" id="item-1-2-tab" role="tab" aria-controls="item-1-2" aria-selected="false" href="#item-1-2" data-bs-toggle="tab" style="font-family: Inter, sans-serif;">Quản lý tài khoản sinh viên</a></li>
                <li class="nav-item"><a class="nav-link" id="item-1-3-tab" role="tab" aria-controls="item-1-3" aria-selected="false" href="#item-1-3" data-bs-toggle="tab" style="font-family: Inter, sans-serif;">Tạo bài viết</a></li>
                <li class="nav-item"><a class="nav-link" id="item-1-4-tab" role="tab" aria-controls="item-1-4" aria-selected="false" href="#item-1-4" data-bs-toggle="tab" style="font-family: Inter, sans-serif;">Cấp tài khoản sinh viên</a></li>
            </ul>
        </div>
        
        <div class="card-body" style="background: #474E68;">
            <div id="nav-tabContent" class="tab-content">
            @yield('content')
            </div>
        </div>  
        
    </div>  

    @include('layouts.frontend.footer')
    @include('layouts.backend.js')

    @livewireScripts
</body>
</html>
