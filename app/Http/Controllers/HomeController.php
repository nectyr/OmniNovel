<?php

namespace App\Http\Controllers;

use App\FlowDash\Http\Middleware\SetDefaultLayoutForUrls;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', SetDefaultLayoutForUrls::class]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages/dashboard');
    }









    /**
     * TESTING OUTPUT
     */
    public function test(Request $request) {
        $user = Auth::user();
        dd((new UserStateController)->index());
    }

}
