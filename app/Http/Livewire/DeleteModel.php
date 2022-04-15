<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\URL;


class DeleteModel extends Component
{
    public Model $model;
    public $pathtofile;
    public $previous;

public function dalek(){
    if($this->model->getTable() === 'stills'){
       $this->pathtofile = 'stills/'.$this->model->category.'/'.$this->model->filename;
       $this->model->delete();
       Storage::delete($this->pathtofile);
       $this->emitUp('refreshed');

    }elseif($this->model->getTable() === 'proofs'){
       $this->pathtofile = "proofs/".$this->model->projects->client->name."/".$this->model->projects->project_title."/".$this->model->filename;
        $this->model->comments()->delete();
        $this->model->delete();
        Storage::delete($this->pathtofile);
        return redirect($this->previous);
    }elseif($this->model->getTable() === 'projects'){
        $this->pathtofile = "proofs/".$this->model->client->name."/".$this->model->project_title;
        $this->model->comments()->delete();
        $this->model->proofs()->delete();
        $this->model->delete();
        Storage::deleteDirectory($this->pathtofile);
        $this->emitUp('refreshed');
    }elseif($this->model->getTable() === 'users'){
        $this->model->comments()->delete();
        $this->model->delete();
        $this->emitUp('refreshed');

    }else{
        $this->model->delete();
        $this->emitUp('refreshed');
    }
}
    public function mount(){
        $this->previous = URL::previous();

    }
    public function render()
    {
        return view('livewire.delete-model');
    }
}
