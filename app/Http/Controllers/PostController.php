<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{   public function getAllPosts()
    {
        $posts = Post::all();
        foreach ($posts as $post) {
            $imagePath = $post->image_path;
            return view('myposts', compact('imagePath'));
        };
    }

    public function destroy(Request $request){
        $id = $request['post.id'];
        $post = Post::find($id);
        if ($post) {
            $post->delete();
            $filePath = ('/home/egor/kyrsovaya/public/images/' .  $request['post.path']);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            return back();
        }
    }
    public function randomPosts()
    {
        // Получаем три случайных поста
        $posts = Post::inRandomOrder()->take(3)->get();

        // Возвращаем представление с этими постами
        return view('index', compact('posts'));
    }

    public function update_posts (Request $request){
        $id = $request['post.id'];
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $post = Post::find($id);
            $post->update([
                'image_path' => $imageName,
                'description' => $request['description']
            ]);
            $filePath = ('/home/egor/kyrsovaya/public/images/' .  $request['post.image_path']);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
            return redirect()->back();
        }
    }
}
