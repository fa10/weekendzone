<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

use App\Event;

class PagesController extends Controller
{

    /**
     * @Get("/")
     * @
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * @Get("events")
     *
     */
    public function events(Event $event)
    {
        $events = $event->get();

        return view('pages.events', compact('events'));
    }

    /**
     *@Get("dashboard", as="dashboard_path", middleware="auth")
     */
    public function dashboard()
    {
        return view('dashboard.index');
    }



}
