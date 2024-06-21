<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function uploadImage(Request $request)
{
    // Получаем текущего пользователя (автора)
    $user = auth()->user();

    // Сохраняем изображение
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        // Создаем новый пост и связываем с пользователем
        $post = new Post();
        $post->user_id = $user->id; // ID текущего пользователя
        $post->name = $user->name;
        $post->image_path = $imageName;
        $post->description = $request['description']; // Путь к изображению
        $post->save();

        return redirect()->back();
    }

    return redirect()->back()->with('error', 'Ошибка при загрузке изображения.');
}
    public function show()
    {
        $images = Post::orderBy('id', 'desc')->get();

        return view('galery', compact('images'));
}
    public function delete_posts(){
        $user = Auth::user();
        $posts = Post::where('user_id', $user->id)->get();
        return view('deleteposts', compact('posts'));
    }
    public function update_posts(){
        $user = Auth::user();
        $posts = Post::where('user_id', $user->id)->get();
        return view('updateposts', compact('posts'));
    }
}
