<?php
namespace App\Http\Controllers\Queue;

use App\Http\Controllers\Controller;
use App\Jobs\WriteLog;

class WriteLogController extends Controller {

    public function index()
    {
        $this->dispatch(new WriteLog('Mucalscio'));
        dd(date('Y-m-d H:i:s', time()));
    }

}