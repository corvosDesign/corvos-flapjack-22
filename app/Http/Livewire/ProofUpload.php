<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Proof;

class ProofUpload extends Component
{
    use WithFileUploads;
    public $photos =[];
    public $proofs;
    public $project;
    public $newProof;
    public $path;


public function mount(){

}

public function save()
   {
$this->validate([
        'photos.*' => 'image|max:5120', // 5MB Max
    ]);
        foreach($this->photos as $photo){

        $filename = $photo->getClientOriginalName();
        $photo->storeAs($this->path, $filename);
        $this->newProof = Proof::create([
           'filename'=>$filename,
           'approved'=>0,
        ]);
        $this->newProof->projects()->associate($this->project)->save();
    }
        $this->proofs =  Proof::all()->where('project_id', $this->project->id);
        session()->flash('message', 'The Chosen One, The Boy May Be. Nevertheless, Grave Danger, I Fear In His Training');

    }



    public function render()
    {

        return view('livewire.proof-upload');



    }
}
