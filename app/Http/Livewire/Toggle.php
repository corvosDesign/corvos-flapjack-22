<?php

namespace App\Http\Livewire;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use Illuminate\Support\Carbon;

class Toggle extends Component
{
    public Model $model;
    public $field;
    public $tgl;

public function closedDate($mybool) {
    $closingDate = now()->toDateString();
    if($mybool == 1){
        $this->model->setAttribute('project_end', NULL)->save();
} else {
    $this->model->setAttribute('project_end', $closingDate)->save();
}
$this->emitUp('projectStateChange');
}

public function updating ($field, $value){
    $this->model->setAttribute($this->field, $value)->save();
    if($this->field == 'open'){
        $this->closedDate($value);
    }elseif($this->field == 'visable'){
        $this->emit('updateCount');
    }


}
public function mount(){
    $this->tgl = (bool) $this->model->getAttribute($this->field);
}


    public function render()
    {
        return view('livewire.toggle');
    }


}
