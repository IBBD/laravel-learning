<?php

/*
 * 事件可以设置为同步的事件和异步事件
 *
 * 异步事件依赖于队列，需要对队列的使用有一定的了解，可以参看以下文档
 * http://laravelacademy.org/post/2012.html
*/


Route::group(['prefix' => 'event', 'namespace' => 'Event'], function () {
    //异步事件
    Route::get('async','AsyncController@index');
    //同步事件
    Route::get('sync','SyncController@index');
});


/*
 * 用redis驱动的队列
 */
Route::group(['prefix' => 'queue', 'namespace' => 'Queue'], function () {
    Route::get('/','WriteLogController@index');
});


Route::get('/', function () {
    return view('welcome');
});
