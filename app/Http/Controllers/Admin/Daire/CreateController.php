<?php

namespace App\Http\Controllers\Admin\Daire;

use App\Http\Controllers\Controller;
use App\Models\Mudurluk;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }public function __invoke()
    {
        $mudurluks = Mudurluk::all();
        return view('admin.daire.create', compact('mudurluks'));
    }
}
