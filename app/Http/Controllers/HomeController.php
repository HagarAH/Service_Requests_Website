<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use App\Models\Server;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $user_id = auth()->id();
        $profile_id = Profile::where('user_id', $user_id)->first()->id;

        if (auth()->user()->role == 'admin') {
            $posts = Post::whereIn('notification_id', [1, 3])->get();

            $servers = Server::whereIn('notification_id', [1, 3])->get();


        }  if (auth()->user()->role == 'user') {
            $posts = Post::where('profile_id', $profile_id)->whereIn('notification_id', [4, 2])->get();

            $servers = Server::where('profile_id', $profile_id)
                ->whereIn('notification_id', [4, 2])->get();

        }


        return view('home', compact('servers', 'posts'));
    }
}
