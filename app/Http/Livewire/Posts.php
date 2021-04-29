<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    use WithPagination;
    protected $listeners = ['echo:posts,PostAdded' => "postAdded"];
    //public $posts;

    public function render()
    {
        return view('livewire.posts', [
            'posts' => Post::paginate(5),
        ]);
    }
    public function postAdded($post)
    {
        
        $this->posts->prepend(Post::find($post['id']));
        
        session()->flash('status', "Nouveau message");
    }
    // public function mount()
    // {
    //     $this->posts = Post::latest()->get();
    // }

}
