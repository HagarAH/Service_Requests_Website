<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        Category::create($data);
        return redirect()->route('admin.category.index');
    }
}
