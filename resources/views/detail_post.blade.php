<!DOCTYPE html>
<html lang="en">

<head>
    <meta name='csrf-token' content = "{{ csrf_token() }}">
    @include('layouts.backend.css')
</head>

<body class="d-flex flex-column" style="background: #6B728E;width: 100%;height: 100%;">
    @include('layouts.frontend.header')

    <div class="container text-center d-xxl-flex flex-column justify-content-xxl-center align-items-xxl-center" style="background: #474E68;font-family: Inter, sans-serif;color: rgb(255,255,255);border-radius: 15px;margin-top: 30px;">
        <h1 style="max-width: 70%;font-weight: bold;margin-top: 15px; font-size: 28px;">{{ $post->title_post }}</h1>
        <img src="{{ $post->img_post }}" style="width: auto;margin-top: 15px;max-width: 60%;margin-bottom: 30px;">
        <div style="width: 100%;">
            <p class="text-start d-xxl-flex" style="max-width: 100%;margin-left: 20px;font-size: 18px;">{{ $post->content_post }}</p>
        </div>

        @guest
            @if (Route::has('login'))
            <a href="/" style="text-decoration: none;"><button class="btn btn-primary" type="button" style="background: #404258;border-style: none;margin-bottom: 16px;">Quay lại trang chủ</button></a>
            @endif
        @else
            @if (Auth::user()->role_as == 1)
                <a href="/admin/dashboard" style="text-decoration: none;"><button class="btn btn-primary" type="button" style="background: #404258;border-style: none;margin-bottom: 16px;">Quay lại trang quản lý</button></a>
            @else
                <a href="/" style="text-decoration: none;"><button class="btn btn-primary" type="button" style="background: #404258;border-style: none;margin-bottom: 16px;">Quay lại trang chủ</button></a>
            @endif
        @endguest
    </div>
    <div class="comment-area mt-4" style = "width: 50%; margin-left: 100px">
        @if (session('message'))
            <h6 class = 'alert alert-warning mb-3'>{{ session('message') }}</h6>
        @endif
    <div class="card card-body" style = "background-color:#50577a">
        <h6 class="card-title" style="color: #ffffff">Bình luận</h6>
        <form action="{{ url('comments') }}" method = "POST">
            @csrf
            <input type="hidden" name = "post_slug" value="{{ $post->id }}">
            <textarea name="content_comment" class="form-control" rows="3" required></textarea>
            <button type = "submit" class = 'btn btn-primary mt-3' style = "background-color: #404258; border: none">Đăng</button>
        </form>
    </div>

    @forelse ($post->comments->reverse() as $comment)
    <div class='comment-container card card-body shadow-sm mt-3' style = "background-color:#50577a">
        <div class="detail-area" style="color: #ffffff">
            <h6 class="user-name mb-1">
                @if($comment->user)
                    {{$comment -> user -> name}}
                @endif
            </h6>
            <p class="user-comment mb-1">
                {!! $comment->content_comment !!}
            </p>
        </div>
        @if (Auth::check() && Auth::id() == $comment->id_user || Auth::id() == 1)
        <div>

            <button type='button' value='{{ $comment->id }}' class ="deleteComment btn btn-danger btn-sm me-2 mt-3">Xóa</button>
        </div>
        @endif
    </div>
    @empty
        <h6 style='color: #ffffff'>Hiện tại chưa có bình luận nào</h6>
    @endforelse
</div>
    @include('layouts.frontend.footer')
    @include('layouts.backend.js')

    <script>
        $(document).ready(function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token').attr('content')
                }
            });
            $(document).on('click', '.deleteComment', function(){
                if(confirm('Bạn muốn xóa bình luận này chứ?'))
                {
                    var thisClicked = $(this);
                    var comment_id = thisClicked.val();

                    $.ajax({
                        type: "POST",
                        url: "/delete-comment",
                        data: {
                            'comment_id': comment_id
                        },
                        success: function (res) {
                            if(res.status == 200) {
                                thisClicked.closest('.comment-container').remove();
                                alert(res.message);
                            } else {
                                alert(res.message);
                            }
                        }
                    })
                }
            })
        })
    </script>
</body>

</html>
