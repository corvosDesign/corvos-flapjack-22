<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Illuminate\Database\Eloquent\Model;
use App\Models;


class ChangeCategory extends Component
{
    public Model $model;
    public $fieldCategory;
    public $stuff;
    public $oldstuff;
    public $oldPath;
    public $newPath;

    public function mount(){
    $this->fieldCategory = $this->model->getAttribute('category');
    }

    public function updating(){
        $this->oldstuff = $this->fieldCategory;
        $this->oldPath = 'stills/' . $this->oldstuff . '/' . $this->model->filename;

    }

    public function updated(){
    $this->model->category= $this->fieldCategory;
    $this->model->save();
    $this->newPath = 'stills/' . $this->fieldCategory . '/' . $this->model->filename;
    Storage::move($this->oldPath, $this->newPath);

    $this->emitUp('ImgType', $this->oldstuff);

    }


    public function render()
    {
        return view('livewire.change-category');
    }
}
