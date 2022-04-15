<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;


class CommentsForm extends Component
{
    public $newComment;
    public $proof;
    public $rules =[
        'newComment' => 'required',
    ];
    public function mount(){

    }

    public function saveComment (){
        $this->validate();
        $this->newComment = Comment::create([
            'comment'=>$this->newComment,
        ]);
        $this->newComment->proof()->associate($this->proof)->save();
        $this->newComment->user()->associate(Auth::user())->save();
        $this->reset(['newComment']);
        $this->emit('refreshed');
    }

    public function render()
    {
        return view('livewire.comments-form');
    }
}
