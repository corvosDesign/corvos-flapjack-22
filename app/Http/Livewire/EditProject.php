<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;



class EditProject extends Component
{
    public Project $project;
    public $projects;
    public $projectId;
    public $projectEditForm = false;
    public $oldProjectName;
    public $oldProjectPath;

    protected $rules =[
    'project.project_title' => 'required',
    ];

    public function mount(){
        $this->projects = Project::all()->sortBy('client_id');
    }

    public function projectUpdate(){
        switch($this->projectId){
            case 0:
                $this->projectEditForm = false;
                break;
            default:
                $this->project = Project::find($this->projectId);
                $this->oldProjectName = $this->project->project_title;
        }
    }
    public function closeandReset(){
        $this->projectEditForm = false;
        $this->projectId = 0;

    }

   public function saveProject(){
        $this->validate();
        $this->project->save();
        session()->flash('message', 'project successfully updated.');
        $this->emit('titlechanged');
        if($this->oldProjectName !== $this->project->project_title && Storage::exists("proofs/".$this->project->client->name."/".$this->oldProjectName)){
            $this->oldProjectPath = Storage::move("proofs/".$this->project->client->name."/".$this->oldProjectName, "proofs/".$this->project->client->name."/".$this->project->project_title);
        }
        $this->closeandReset();
        $this->projects = Project::all();


   }


    public function render()
    {
        return view('livewire.edit-project');
    }
}
