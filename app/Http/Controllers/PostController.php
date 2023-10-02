<?php

namespace App\Http\Controllers;

use App\Models\Medium;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function PHPUnit\Framework\isEmpty;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('post.index', [
        //     'post' => Post::Latest('created_at')->first(),
        // ]);
        return Post::Latest('created_at')->first();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required',
            'file.*' => 'mimes:jpeg,jpg,png,gif,mp4|max:10240'
        ]);

        $post = new Post;
        $post->description = request('description');
        $post->save();

        if($request->hasFile('file')){
            foreach (request('file') as $file) {
                $name = $file->getClientOriginalName();
                if ($file->getMimeType() == 'video/mp4') {
                    $file->move(public_path('/posts/videos/'), $name);
                } else {
                    $file->move(public_path('/posts/images'), $name);
                }
                $m = new Medium;
                $m->media_path = $name;
                if(empty(Post::all())) {
                    $m->post_id = 1;
                } else {
                    $m->post_id = Post::OrderByDesc('created_at')->first()->id;
                }
                $m->save();
            }
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
