<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Response;
use Request;
use Session;

class CORSController extends Controller
{
    /**
     * 演示跨越资源共享响应
     *
     * @return void
     */
    public function index()
    {
        $headers = Request::header();
        // $origin  = $headers['origin'][0];
        $content = Request::all();
        $sid     = Session::getId();

        /*
         * 允许获取跨域
         * 允许提交cooke
         */
        return Response::json(['header'=>$headers, 'sid'=>$sid, 'content'=>$content])
        ->header('Access-Control-Allow-Origin',null)//本地演示，origin值为null
        ->header('Access-Control-Allow-Credentials','true');
    }

    /**
     * 演示预检请求响应
     *
     * @return void
     */
    public function preflight()
    {
        $headers = Request::header();
        $origin  = $headers['origin'][0];
        $content = Request::all();

        /*
         * 响应预检
         * 允许跨越、提交cookie、其他HTTP方法、自定义头部header
         */
        return Response::json()->setStatusCode('204')
        ->header('Access-Control-Allow-Origin',$origin)
        ->header('Access-Control-Allow-Credentials','true')
        ->header('Access-Control-Allow-Methods','GET, POST, PUT')
        ->header('Access-Control-Allow-Headers','X-Custom-Header'); 
    }
}
