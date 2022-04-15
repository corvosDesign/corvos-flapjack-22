<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;


class AddProjectForm extends Component
{
    public $project_name;
    public $newProject;
    public $projectOpenDate;
    public $company;
    public $isVisible = true;

    protected $rules =[
        'project_name'=> 'required'
    ];
    public function submitProject(){
        $this->validate();
        $this->newProject = Project::create([
            'project_title'=>$this->project_name,
            'open'         => true,
            'project_start'=>$this->projectOpenDate,
        ]);
        $this->newProject->client()->associate($this->company)->save();
        Storage::makedirectory('proofs/'.$this->company->name.'/'.$this->newProject->project_title);
         $this->isVisible = false;
         $this->emitUp('projectAdded');
         return $this->newProject;

    }
    public function mount(){
      $this->projectOpenDate = now()->toDateString();
    }

    public function render()
    {
        return view('livewire.add-project-form');
    }
}
