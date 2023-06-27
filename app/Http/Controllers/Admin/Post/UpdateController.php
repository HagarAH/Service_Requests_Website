<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function __invoke(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->status_id=$request->status_id;
        $post->comment=$request->comment;
        $post->update();
        return redirect()->route('admin.post.index');

    }
}
