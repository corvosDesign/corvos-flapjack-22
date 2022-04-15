<?php

namespace App\Http\Livewire;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Still;



use Illuminate\Support\Collection;

class GetImages extends Component
{
    public $category;
    protected $listeners = ['ImgType','refreshed'];

    public function refreshed (){
        $this->render();
    }

    public function ImgType($cat){
     $this->reset();
     $this->category = $cat;
    }
    public function mount(Request $request){
        $this->category = $request->query('autocat');
    }


    public function render()
    {

        $stills=Still::where('category', $this->category)->orderby('placement')->get();
        return view('livewire.get-images',['model'=> $stills]);
    }
}
