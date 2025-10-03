<?php

namespace App\Livewire\Post;

use Livewire\Component;
use App\Models\Post;

class TableRow extends Component
{
    public $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function archive(): void
    {
        $this->post->update(['is_archived' => true]);
        $this->post->refresh();


    }

    public function render()
    {
        return view('livewire.post.table-row');
    }
}