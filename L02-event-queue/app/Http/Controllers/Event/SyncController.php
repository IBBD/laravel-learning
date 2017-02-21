<?php
namespace App\Http\Controllers\Event;

use App\Events\SyncEvent;
use App\Http\Controllers\Controller;

class SyncController extends Controller {

    public function index()
    {
        \Event::fire(new SyncEvent(10));
        dd(date('Y-m-d H:i:s', time()));
    }

}