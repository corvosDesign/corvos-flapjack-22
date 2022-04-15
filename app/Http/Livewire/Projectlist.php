<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use App\Models\Project;
use Illuminate\Http\Request;

class Projectlist extends Component
{

 public $projects;
 protected $listeners = ['projectStateChange'=>'render'];


 public function mount(){
    $this->projects = Project::where('open',true)->get();

}

public function allProjects (){
    $this->projects = Project::all()->sortByDesc('project_start');
}

public function currentProjects(){
    $this->projects = Project::where('open',true)->get();

}
public function closedProjects(){
    $this->projects = Project::where('open',false)->get();

}

    public function render()
    {
        return view('livewire.projectlist');
    }
}
