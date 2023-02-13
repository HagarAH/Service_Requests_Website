<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke($id)
    {


    }
}
