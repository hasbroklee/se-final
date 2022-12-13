@extends('layouts.admin')

@section('content')

@if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
@endif

<!-- sửa bài viết -->
<div id="item-1-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="item-1-1-tab">
    <div class="container d-xxl-flex justify-content-xxl-center align-items-xxl-end" style="background: #404258;padding: 0px;border-radius: 20px;">
        
        <form method="post" action="/admin/update_post/{{ $post->id }}" class="d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-center" style="width: 100%;">
        @csrf
            <div style="width: 60%;"><label class="form-label" style="margin-top: 20px;font-family: Inter, sans-serif;font-weight: bold;font-size: 20px;">Tiêu đề bài đăng</label>
                <input class="form-control" type="text" name="title_post" value="{{ $post->title_post }}" required></div>
            <div style="width: 60%;"><label class="form-label" style="margin-top: 20px;font-family: Inter, sans-serif;font-weight: bold;font-size: 20px;">Nguồn ảnh thumbnail</label>
                <input class="form-control" type="text" name="img_post" value="{{ $post->img_post }}" required></div>
            <div style="width: 60%;"><label class="form-label" style="margin-top: 20px;font-family: Inter, sans-serif;font-weight: bold;font-size: 20px;">Nội dung bài đăng</label>
                <textarea class="form-control" style="height: 150px;" name="content_post" value="" required>{{ $post->content_post }}</textarea></div>
            <div><button class="btn btn-success" type="submit" onclick="return confirm('Bạn muốn sửa bài viết này?');" 
                         style="margin-top: 20px;margin-bottom: 10px;border-style: none;font-family: Inter, sans-serif;font-weight: bold;font-size: 24px;">Sửa</button>
            <a href="/admin/dashboard" class="btn btn-danger" style="margin-top: 20px;margin-bottom: 10px;border-style: none;font-family: Inter, sans-serif;font-weight: bold;font-size: 24px;">Hủy</a></div>     
        </form>

    </div>
</div>  

@endsection