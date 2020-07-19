<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;
use App\Category;
use App\Tag;

class PageController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        return view('web.index', compact('posts'));
    }
    //Muestra todos los posts
    public function blog(Request $request)
    {
        $name = $request->get('name');
        $posts = Post::orderBy('id', 'DESC')
               ->where('status', 'PUBLISHED')
               ->name($name)
               ->paginate(6);
               
        return view('web.posts', compact('posts'));
    }

    //Muestra los posts que pertenecen a una categoría
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->pluck('id')->first();

        $posts = Post::where('category_id', $category)
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.posts', compact('posts'));
    }

    //Muestra los posts que pertenecen a una etiqueta
    public function tag($slug)
    { 
        $posts = Post::whereHas('tags', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.posts', compact('posts'));
    }

    //Muestra el detalle de un post
    public function post($slug)
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(4);
        $posts      = Post::orderBy('created_at', 'DESC')->paginate(3);
        $tags       = Tag::orderBy('created_at', 'DESC')->paginate(6);
        $post       = Post::where('slug', $slug)->first();

        return view('web.post', compact('post', 'categories', 'posts', 'tags'));
     
    }
}
