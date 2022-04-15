<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Still;

class StillsCount extends Component
{
    public $countLive;
    public $countHidden;
    public $type;
    protected $listeners =['updateCount'];


    public function mount(){
        $this->countLive = Still::where('category', $this->type)->where('visable',1)->count();
        $this->countHidden = Still::where('category', $this->type)->where('visable',0)->count();
    }

    public function updateCount(){
        $this->countLive = Still::where('category', $this->type)->where('visable',1)->count();
        $this->countHidden = Still::where('category', $this->type)->where('visable',0)->count();
    }
    public function render()
    {
        return view('livewire.stills-count');
    }
}
