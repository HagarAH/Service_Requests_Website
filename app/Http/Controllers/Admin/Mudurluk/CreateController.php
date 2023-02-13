<?php

namespace App\Http\Controllers\Admin\Mudurluk;

use App\Http\Controllers\Controller;
use App\Models\Daire;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } public function __invoke()
    {
        return view('admin.mudurluk.create');
    }
}
