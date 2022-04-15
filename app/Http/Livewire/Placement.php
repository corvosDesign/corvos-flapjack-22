<?php

namespace App\Http\Livewire;
use App\Models\Still;
use Illuminate\Database\Eloquent\Model;


use Livewire\Component;

class Placement extends Component
{


    public Model $model;
    public $field;

     public function updatePlace(){
     $this->model->placement = $this->field;
     $this->model->save();
     }


    public function render()
    {
        return view('livewire.placement');
    }
}
