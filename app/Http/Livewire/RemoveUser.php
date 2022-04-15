<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class RemoveUser extends Component
{
    protected $userRIP;
    public $deleteId;
    public $users;
    protected $listeners = ['refreshed','nameChanged'];

    public function onTheChoppingBlock(){
        $this->userRIP = User::find($this->deleteId);
    }
    public function refreshed(){
        $this->reset();
        $this->users = User::where('hasAuth', 0)->get();
        session()->flash('message', 'and what of the Time Lords?');
    }
    public function mount(){
        $this->users = User::where('hasAuth', 0)->get();
    }

    public function closeandReset(){
        $this->userRIP = null;
        $this->deleteId = false;

    }
    public function nameChanged(){
        $this->users = User::where('hasAuth', 0)->get();
        $this->deleteId = false;

    }
    public function render()
    {
        return view('livewire.remove-user',['userRIP'=>$this->userRIP]);
    }
}
