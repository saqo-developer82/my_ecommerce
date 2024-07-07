<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use Livewire\Attributes\Title;

class CreatePost extends Component
{
    public $title = 'Post title...';

    #[Title('Create Post')]
    public function render()
    {
        return view('livewire.posts.create-post')->with([
            'author' => "John Doe",
        ]);
    }
}
