<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;

class RemoveProject extends Component
{
    protected $projectRIP;
    public $deleteProjectId;
    public $projects;
    public $proofs;
    protected $listeners = ['refreshed','titlechanged'];

    public function projectOnTheChoppingBlock(){
        $this->projectRIP = Project::find($this->deleteProjectId);
    }
    public function refreshed(){
        $this->reset();
        session()->flash('message','Daleks are supreme. Humans are weak.');
        $this->projects = Project::all();
    }
    public function closeandReset(){
        $this->projectRIP = null;
        $this->deleteProjectId = false;

    }
    public function titlechanged(){

        $this->projects = Project::all();
        $this->deleteProjectId = false;

    }

    public function mount(){
        $this->projects = Project::all();
    }
    public function render()
    {
        return view('livewire.remove-project',['projectRIP'=>$this->projectRIP]);
    }
}



