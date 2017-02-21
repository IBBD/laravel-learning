<?php
namespace App\Http\Controllers\Event;

use App\Events\AsyncEvent;
use App\Http\Controllers\Controller;

class AsyncController extends Controller {

    public function index()
    {
        \Event::fire(new AsyncEvent(10));
        dd(date('Y-m-d H:i:s', time()));
    }

}