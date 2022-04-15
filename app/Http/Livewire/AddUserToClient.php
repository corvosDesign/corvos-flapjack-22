<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;


class AddUserToClient extends Component
{
    public $companies;
    public $companyID;
    public $client;
    protected $listeners  =['resetCompanyList'];

    public function mount(){
        $this->companies = Client::all();
    }
    public function companyFind(){
        $this->client = Client::find($this->companyID);
    }

    public function closeandReset(){
        $this->companyID = null;
        $this->client = null;
    }


    public function render()
    {
        return view('livewire.add-user-to-client');
    }
}
