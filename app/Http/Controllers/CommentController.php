<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Posts;
use App\Models\Comment;


class CommentController extends Controller
{
    //
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'content_comment' => 'required|string'
        ]);

        if($validator->fails())
        {
            return redirect()->back()->with('message', 'Vui lòng nhập bình luận của bạn');
        }
        if(Auth::check())
        {
            $post = Posts::where('id', $request->post_slug)->first();
            if($post)
            {
                Comment::create([
                    'id_post' => $post->id,
                    'id_user' => Auth::user()->id,
                    'content_comment' => $request->content_comment
                ]);
               return redirect()->back()->with('message', 'Bình luận thành công');
            }
            else
            {
               return redirect()->back()->with('message', 'Không tìm thấy bài đăng');
            }
        }
        else
        {
           return redirect()->back()->with('message', 'Đăng nhập để bình luận');
        }
    }

    public function destroy(Request $request)
    {
        if (Auth::check())
        {
            $comment = Comment::where('id', $request->comment_id)->first();
            $comment->delete();

            return response()->json([
                'status'=>200,
                'message'=> 'Xóa bình luận thành công'
            ]);
        }
        else
        {
            return response()->json([
                'status' => 401,
                'message' => 'Đăng nhập để xóa bình luận này'
            ]);
        }
    }
}
