<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
    public function index() {
        $posts = Post::latest()->with(['user', 'likes'])->paginate(5);
        return view('posts.index', compact('posts'));
    }
    public function store(Request $request) {
        $this->validate($request, [
            'body' => 'required',
        ]);

        $user          = auth()->user();
        $post          = new Post();
        $post->user_id = $user->id;
        $post->body    = $request->body;
        $post->save();

        return back();
    }
    public function destroy(Post $post) {
        $this->authorize('delete', $post);
        $post->delete();
        return back();
    }
}
