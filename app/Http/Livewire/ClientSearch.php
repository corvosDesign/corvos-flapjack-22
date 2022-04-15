<?php

namespace App\Http\Livewire;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Livewire\Component;
use App\Models\Client;

class ClientSearch extends Component
{
    public $companies;
    public $company_id;
    public $company;
    public $companyVisible = true;
    public $showUser = false;

protected $listeners = ['companyAdded','projectAdded'];

    public function companyAdded($id){
        $this->companies = Client::all();
        $this->company_id = $id;
        $this->updated();
    }

    public function projectAdded(){
        $this->showUser=true;
    }

   public function mount(){
        $this->companies = Client::all();


   }


   public function updated(){
     $this->company = Client::find($this->company_id);
     $this->companyVisible = false;
   }

    public function render()
    {

        return view('livewire.client-search');

    }
}
