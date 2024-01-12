<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(): Paginator {
        return Post::paginate(25);
    }

    public function show (string $slug, string $id) : RedirectResponse | Post {
        $post = Post::findOrfail($id);
        if ($post->slug != $slug) {
            return to_route("blog.show", [ "slug" => $post->slug, "id" => $post->id ]);
        }
        return $post;
    }
}
