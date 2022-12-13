<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $posts = Posts::all();
        $user = User::all();
        return view('admin.dashboard', compact('posts', 'user'));   
    }

    // tạo
    public function store_post(Request $request)
    {
        DB::statement("ALTER TABLE Posts AUTO_INCREMENT = 1;");
        $posts = new Posts();
        $posts->title_post = $request->title_post;
        $posts->img_post = $request->img_post;
        $posts->content_post = $request->content_post;
        $posts->save();
        return redirect()->action([DashboardController::class, 'index'])->with('success','Thêm bài đăng thành công.');
    }

    public function store_user(Request $request)
    {
        $check = User::where('user_name', '=', $request->user_name)->first();
        if (!$check) {
            DB::statement("ALTER TABLE Users AUTO_INCREMENT = 1;");
            $user = new User();
            $user->name = $request->name;
            $user->user_name = $request->user_name;
            $user->password = Hash::make($request->password_user);
            $user->save();
            return redirect()->action([DashboardController::class, 'index'])->with('success','Thêm tài khoản thành công.');
        } else {
            return back()->withErrors('Trùng mã sinh viên.');
        }
    }

    // sửa bài viết
    public function edit_post($id)
    {
        $post = Posts::findOrFail($id);
        return view('admin.edit_post', compact('post'));
    }

    public function update_post(Request $request, $id)
    {
        $post = Posts::find($id);
        $post->title_post = $request->title_post;
        $post->img_post = $request->img_post;
        $post->content_post = $request->content_post;

        $post->save();
        return redirect()->action([DashboardController::class, 'index']);
    }

    // sửa tài khoản
    public function show_reset_password()
    {
        return view('auth.reset_password');
    }

    public function reset_password(Request $request, $user_name)
    {
        $user = User::where('user_name', '=', $user_name)->select('*')->first();
        
        if ($request->password == $request->password_cofirmation) {
            $request->password = Hash::make($request->password);
            $user->password = $request->password;
            $user->save();
            $request->session()->regenerate();
            return back()->with('success', 'Đổi mật khẩu thành công.');
        } else {
            return back()->withErrors('Mật khẩu mới không khớp.');
        }  
    }

    // xóa 
    public function delete_post($id)
    {
        $posts = Posts::find($id);
        $posts->delete();
        
        $posts_new = Posts::all();
        foreach ($posts_new as $key => $value) {
            $value->id = $key + 1;
            $value->save();
        }
        return redirect()->action([DashboardController::class, 'index'])->with('success','Xóa bài viết thành công.');
    }

    public function delete_user($id)
    {
        $user = User::find($id);
        $user->delete();

        $user_new = User::all();
        foreach ($user_new as $key => $value) {
            $value->id = $key + 1;
            $value->save();
        }
        return redirect()->action([DashboardController::class, 'index'])->with('success','Xóa tài khoản thành công.');;
    }
}