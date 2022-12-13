@extends('layouts.admin')

@section('content')

@if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
@endif
<!-- danh sách bài viết -->
<div id="item-1-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-3-tab">
    <div>
        <table class="table table-striped table-bordered" id="example" cellspacing="0" width="100%">
            <thead>
                <tr style="color: var(--bs-card-bg);background: #50577A;">
                    <th class="text-center" style="width: 60px;">ID</th>
                    <th class="text-center" style="width: 200px;">Ảnh</th>
                    <th class="text-center" style="width: 300px;max-width: 300px;">Tên bài đăng</th>
                    <th class="text-center">Nội dung</th>
                    <th class="text-center">Nút</th>
                </tr>
            </thead>
            <tbody style="color: var(--bs-card-bg);background: #6B728E;">

            @foreach($posts->reverse() as $row)
                <tr style="font-family: Inter, sans-serif;color: #ffffff;">
                    <td class="text-center" style="color: var(--bs-card-bg);width: 20px;max-width: 20px;">{{ $row->id }}</td>
                    <td class="text-center" style="color: var(--bs-card-bg);max-width: 400px;width: 200px;">
                        <picture><img style="width: auto;height: 120px;" src="{{ $row->img_post }}"></picture>
                    </td>
                    <td class="text-start" style="color: var(--bs-card-bg);width: 300px;max-width: 300px;">{{ $row->title_post }}</td>
                    <td class="text-start" style="color: var(--bs-card-bg);width: 480px;max-width: 480px;">{{ $row->content_post }}</td>
                    <td class="text-center" style="color: var(--bs-card-bg);max-width: 400px;width: 50px;">
                        <a href="/post/{{ $row->id }}" ><button class="btn btn-primary" style="margin-bottom: 7px;">Xem</button></a>    
                        <a href="/admin/edit_post/{{ $row->id }}" ><button class="btn btn-success" style="margin-bottom: 7px;">Sửa</button></a>    
                        <form method="post" action="/admin/delete_post/{{ $row->id }}" onsubmit="return ConfirmDelete( this )">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Bạn muốn xóa bài viết này?');">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- danh sách sinh viên -->
<div id="item-1-2" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-4-tab">
    <div>
        <table class="table table-striped table-bordered" id="example" cellspacing="0" width="100%">
            <thead>
                <tr style="color: var(--bs-card-bg);background: #50577A;">
                    <th class="text-center" style="width: 60px;">ID</th>
                    <th class="text-center" style="width: 200px;max-width: 200px;">Mã sinh viên</th>
                    <th class="text-center" style="width: 200px;max-width: 200px;">Họ và tên</th>
                    <th class="text-center" style="width: 200px;max-width: 200px;">Role</th>
                    <th class="text-center" style="width: 200px;max-width: 200px;">Nút</th>
                </tr>
            </thead>
            <tbody style="color: var(--bs-card-bg);background: #6B728E;">

            @foreach($user as $row)
                <tr style="font-family: Inter, sans-serif;color: #ffffff;">
                    <td class="text-center" style="color: var(--bs-card-bg);width: 20px;max-width: 20px;">{{ $row->id }}</td>
                    <td class="text-start" style="color: var(--bs-card-bg);width: 200px;max-width: 200px;">{{ $row->user_name }}</td>
                    <td class="text-start" style="color: var(--bs-card-bg);width: 200px;max-width: 200px;">{{ $row->name }}</td>
                    <td class="text-center" style="color: var(--bs-card-bg);width: 200px;max-width: 200px;">{{ $row->role_as }}</td>
                    @if ($row->role_as == '1')
                    <td class="text-center" style="color: var(--bs-card-bg);width: 200px;max-width: 200px;">
                    </td>
                    @else 
                    <td class="text-center" style="color: var(--bs-card-bg);width: 200px;max-width: 200px;">
                        <form method="post" action="/admin/delete_user/{{ $row->id }}" onsubmit="return ConfirmDelete( this )">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Bạn muốn xóa tài khoản này?');">Xóa</button>
                        </form>
                    </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- thêm bài viết -->
<div id="item-1-3" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-1-tab">
    <div class="container d-xxl-flex justify-content-xxl-center align-items-xxl-end" style="background: #404258;padding: 0px;border-radius: 20px;">
        
        <form method="post" action="/admin/create_post" class="d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-center" style="width: 100%;">
            @csrf
            <div style="width: 60%;"><label class="form-label" style="margin-top: 20px;font-family: Inter, sans-serif;font-weight: bold;font-size: 20px;">Tiêu đề bài đăng</label>
                <input class="form-control" type="text" name="title_post" value="" required></div>
            <div style="width: 60%;"><label class="form-label" style="margin-top: 20px;font-family: Inter, sans-serif;font-weight: bold;font-size: 20px;">Nguồn ảnh thumbnail</label>
                <input class="form-control" type="text" name="img_post" value="" required></div>
            <div style="width: 60%;"><label class="form-label" style="margin-top: 20px;font-family: Inter, sans-serif;font-weight: bold;font-size: 20px;">Nội dung bài đăng</label>
                <textarea class="form-control" style="height: 150px;" name="content_post" value="" required></textarea></div>
            <div><button class="btn btn-success" type="submit" style="margin-top: 20px;margin-bottom: 10px;border-style: none;font-family: Inter, sans-serif;font-weight: bold;font-size: 24px;">Tạo</button>
            <a href="/admin/dashboard" class="btn btn-danger" style="margin-top: 20px;margin-bottom: 10px;border-style: none;font-family: Inter, sans-serif;font-weight: bold;font-size: 24px;">Hủy</a></div>     
        </form>

    </div>
</div>  

<!-- thêm sinh viên -->
<div id="item-1-4" class="tab-pane fade" role="tabpanel" aria-labelledby="item-1-2-tab">
    <div class="container d-xxl-flex justify-content-xxl-center align-items-xxl-end" style="background: #404258;padding: 0px;border-radius: 20px;">
        
        <form method="post" action="/admin/create_user" class="d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-center" style="width: 73%;">
            @csrf
            @if($errors->any())
            @foreach($errors->all() as $err)
            <p class = 'alert alert-danger'>{{ $err }}</p>
            @endforeach
            @endif  
            <div style="width: 60%;"><label class="form-label" style="margin-top: 20px;font-family: Inter, sans-serif;font-weight: bold;font-size: 20px;">Tên học sinh</label>
                <input class="form-control" type="text" name="name" required></div>
            <div style="width: 60%;"><label class="form-label" style="margin-top: 20px;font-family: Inter, sans-serif;font-weight: bold;font-size: 20px;">Tên đăng nhập</label>
                <input class="form-control" type="text" name="user_name" required></div>
            <div style="width: 60%;"><label class="form-label" style="margin-top: 20px;font-family: Inter, sans-serif;font-weight: bold;font-size: 20px;">Mật khẩu</label>
                <input class="form-control" type="password" name="password_user" required></div>
            <div><button class="btn btn-success" type="submit" style="margin-top: 20px;margin-bottom: 10px;border-style: none;font-family: Inter, sans-serif;font-weight: bold;font-size: 24px;">Tạo</button>
            <a href="/admin/dashboard" class="btn btn-danger" style="margin-top: 20px;margin-bottom: 10px;border-style: none;font-family: Inter, sans-serif;font-weight: bold;font-size: 24px;">Hủy</a></div>                               
            
        </form>
    </div>
</div>

@endsection