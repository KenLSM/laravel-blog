<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';

    public function store(Request $request) {
        $post = new Post;

        $post->title = $request->title;
        $post->body = $request->body;

        $post->save();
    }
}
