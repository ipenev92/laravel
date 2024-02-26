<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Event;
use Debugbar;

class HomeController extends Controller {
    public function __construct(private Event $event) {}

    public function index() {
        try {
            $events = $this->event->with('town');

            return $view = View::make('front.home.index')
            ->with('events', $events);

        } catch(\Exception $e) {

            Debugbar::info($e);
            return response()->json([
                'message' => \Lang::get('admin/notification.error'),
            ], 500);
        }
    }
}