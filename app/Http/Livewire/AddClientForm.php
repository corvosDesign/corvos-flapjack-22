<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class AddClientForm extends Component
{
    /*form variables*/
        public $company_name;
        public $company_address;
        public $phone;
        public $ext;
        public $newCompany;
    protected $rules = [
        'company_name' => 'required|unique:clients,name',
        'company_address' => 'required',
        'phone'=>'required|regex:/^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$/',
        'ext'=> 'present'

    ];
    public function submit(){
           $this->validate();

          $this->newCompany =  Client::create([
               'name'         => $this->company_name,
               'address_line1'=> $this->company_address,
               'phone'        => $this->phone,
               'extension'    => $this->ext,
           ]);
           Storage::makeDirectory("proofs/".$this->newCompany->name);
           $this->emitUp('companyAdded', $this->newCompany->id);
       }
       public function closeandReset(){
           $this->reset();
           $this->emitUp('closeandReset');
       }


    public function render()
    {
        return view('livewire.add-client-form');
    }
}
