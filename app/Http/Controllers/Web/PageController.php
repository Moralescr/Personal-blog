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

    public function about()
    {
        return view('web.sections.about');
    }

    public function certificates()
    {
        return view('web.sections.certificates');
    }

    // Show all posts
    public function blog(Request $request)
    {
        $name = $request->get('name');
        $posts = Post::orderBy('id', 'DESC')
            ->where('status', 'PUBLISHED')
            ->name($name)
            ->paginate(6);

        return view('web.posts', compact('posts'));
    }

    // Show posts related to a category
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->pluck('id')->first();

        $posts = Post::where('category_id', $category)
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.posts', compact('posts'));
    }

    // Show posts related to a tag
    public function tag($slug)
    {
        $posts = Post::whereHas('tags', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);

        return view('web.posts', compact('posts'));
    }

    // Show a detail of the publication
    public function post($slug)
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(4);
        $posts      = Post::orderBy('created_at', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        $tags       = Tag::orderBy('created_at', 'DESC')->paginate(6);
        $post       = Post::where('slug', $slug)->first();

        return view('web.post', compact('post', 'categories', 'posts', 'tags'));
    }

    // Return the language of a session
    public function swap($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}