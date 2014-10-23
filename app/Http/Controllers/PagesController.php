<?php namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Routing\Controller;

use App\Event;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;

class PagesController extends Controller
{

    /**
     * @Get("/")
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('pages.home', compact('user'));
    }

    /**
     * @Get("events")
     *
     */
    public function events()
    {
        return view('pages.events');
    }

    /**
     *@Get("dashboard", as="dashboard_path", middleware="auth")
     */
    public function dashboard()
    {
        return view('dashboard.index');
    }



}
