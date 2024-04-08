<?php

namespace App\Livewire\Posts;

use Livewire\Attributes\Lazy;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Lazy]

class Index extends Component
{
    #[On('postCreated')]

    public function updateList($post)
    {

    }

    public function placeholder()
    {
        return view('livewire.posts.placeholder');
    }

    public function render()
    {
        $posts = \App\Models\Post::query()->with('user')->latest()->get();
        return view('livewire.posts.index', [
            'posts' => $posts
        ]);
    }
}
