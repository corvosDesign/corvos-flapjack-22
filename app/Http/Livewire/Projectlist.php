<?php

namespace App\Http\Livewire;

use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use App\Models\Project;
use App\Models\Client;
use Illuminate\Http\Request;

class Projectlist extends Component
{

 public $projects;
 public $allClients;
 public $projectOrClient = true;

 protected $listeners = ['projectStateChange'=>'render'];


 public function mount(){
    $this->projects = Project::where('open',true)->get();
    $this->allClients = Client::all()->sortBy('name');

}

public function allProjects (){
    $this->projects = Project::all()->sortByDesc('project_start');
    $this->projectOrClient = true;
}

public function currentProjects(){
    $this->projects = Project::where('open',true)->get();
    $this->projectOrClient = true;


}
public function closedProjects(){
    $this->projects = Project::where('open',false)->get();
    $this->projectOrClient = true;


}
public function clients(){
    $this->projectOrClient=false;
}

    public function render()
    {
        return view('livewire.projectlist');
    }
}
