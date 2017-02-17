<?php

namespace App\Http\Controllers;

use App\Post;
use Auth;
use Gate;
use Illuminate\Http\Request;

class PostController extends Controller {

    /*
     * Gate门面在laravel5.1里面是默认没有
     * Providers里面，AuthServiceProvider需要自己加，需要boot函数
     * AuthServiceProvider 需要在 　config/app.php 里面注册
     */
    public function update(Request $request) 
    {

        Auth::logout();

        $name = $request->input('name');
        if ($name == 'mucalscio') {
            Auth::loginUsingId(1);
        } else {
            Auth::loginUsingId(2);
        }

        $post_id = $request->input('post_id');
        $post = Post::findOrFail($post_id);

        //dump("登录用户的ID：".$request->user()->id);
        //dump("操作的user_id：".$post->user_id);

        /*
         * authorize根据laravel自定义的登录，去拿user对象，进行权限验证
         * 当权限验证的时候，会报一个异常。
         * 如果不处理这个异常，在 resources/views/errors 下添加 403.blade.php，会自动重定向至这个页面
         * 没有 403.blade.php 这个文件，又没有处理异常，则报错
         */
        try {
            $this->authorize($post);
        } catch (\Exception $e) {
            return "权限不足";
        }


        /*if (Gate::denies('update', $post)) {
            abort(403);
        }*/

        return "通过";
    }

}