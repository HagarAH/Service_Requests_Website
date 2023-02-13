<?php

namespace App\Http\Controllers\User\Server;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Server;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke()
    {


        $profile = Profile::where('user_id', auth()->id())->first();


        $servers = Server::where('profile_id', $profile->id)->get();

        return view('user.server.index', compact('servers'));



    }
}
