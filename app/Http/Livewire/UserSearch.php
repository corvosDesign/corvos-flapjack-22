<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

use App\Models\Client;

class UserSearch extends Component
{
    public $company;
    public $users;
    public $newUser = false;



    public function mount(){
        $this->users = $this->company->user;
    }

    public function render()
    {
        return view('livewire.user-search');
    }
}
