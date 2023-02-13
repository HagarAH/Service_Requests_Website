<?php

namespace app\Http\Controllers\User\Post;

use App\Http\Controllers\Controller;
use app\Http\Controllers\User\Profile\ProfileController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Profile;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::where('user_id', auth()->id())->first();

        $posts = Post::where('profile_id', $profile->id)->get();

        return view('user.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $profile = auth()->user()->profile;

        if ($profile->phone === '0' || $profile->daire_id === 1 || $profile->fname === '-' || $profile->lname === '-') {
            return redirect()->route('profile.edit', ['profile' => $profile->id]);
        }

        return view('user.post.create', ['categories' => Category::all()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->category_id = $request->category_id;
        $post->profile_id = auth()->user()->id;
        $post->description = $request->description;
        $post->save();
        return view('user.post.index', ['posts' => Post::all()]);

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $categories = Category::all();
        return view('user.post.edit', compact('post', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = \request()->validate([
            'category_id' => 'required|string',
            'description' => 'required|string',
        ]);
        $post = Post::find($id);
        $post->update($data);

        return redirect()->route('Post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('Post.index');
    }
}
