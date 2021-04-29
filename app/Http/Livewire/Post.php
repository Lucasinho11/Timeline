<?php

namespace App\Http\Livewire;
use Illuminate\Support\Carbon;
use Livewire\Component;

class Post extends Component
{
    public $post;
    public $date;
    public function mount($post)
    {
        $this->post = $post;

        $this->date = Carbon::parse($post->created_at)->diffForHumans();
    }
    public function render()
    {
        return view('livewire.post');
    }
}
