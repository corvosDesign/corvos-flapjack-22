<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Client;
use Illuminate\Support\Facades\Storage;



class EditClient extends Component
{
    public Client $client;
    public $companies;
    public $cid;
    public $showForm = false;
    public $oldName;
    public $oldPath;

    protected $rules =[
        'client.name' => 'unique:App\Models\Client,name',
        'client.address_line1' => 'required',
        'client.phone'=>'required|regex:/^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$/',
        'client.extension'=> 'sometimes'

    ];

    public function mount(){
        $this->companies = Client::all();
    }

    public function cidUpdate(){
        switch($this->cid){
            case 0:
                $this->showForm = false;
                break;
            default:
                $this->client = Client::find($this->cid);
                $this->oldName = $this->client->name;
        }


    }
    public function closeandReset(){
        $this->showForm = false;
        $this->cid =0;
    }

    public function save(){
        $this->validate();
        $this->client->save();
        session()->flash('message', 'client successfully updated.');
        // create folder if not there
        if(!Storage::disk('local')->exists("proofs/".$this->oldName)){
           Storage::makeDirectory("proofs/".$this->client->name);
        }
        else{
         $this->oldPath = Storage::move("proofs/".$this->oldName, "proofs/".$this->client->name);
        }
        $this->closeandReset();

        $this->companies = Client::all();
    }


    public function render()
    {
        return view('livewire.edit-client');
    }
}
