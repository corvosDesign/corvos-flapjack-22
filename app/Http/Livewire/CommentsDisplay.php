<?php


namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;

class CommentsDisplay extends Component
{
    public $proof;
    public $comments;
    protected $listeners = ['refreshed'];

    public function mount(){
    }
    public function refreshed(){
        //left blank to refresh render
    }
    public function render()
    {
        $this->comments = Comment::latest()->where('proof_id', $this->proof->id)->get();

        return view('livewire.comments-display',['comments'=>$this->comments]);
    }
}
