<?php

namespace App\Http\Controllers\Admin\Disk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }public function __invoke()
    {
        return view('admin.disk.create');
    }
}
