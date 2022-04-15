<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class EditUser extends Component
{
    public $usersList;
    public $userEdit;
    public $uid;
    public $formOpen = false;

    public $name;
    public $email;
    public $password;
    public $password_confirmation;


    protected $rules =[


    ];

    public function mount(){
        $this->usersList = User::select("id","name")->where("hasAuth", 0)->get();
    }
    public function uidChange(){

        switch($this->uid){
        case 0:
            $this->reset(['name','email','formOpen']);
            break;
        default:
            $this->formOpen =true;
            $this->userEdit = User::find($this->uid);
            $this->prefill();
            break;
        }
    }

    public function prefill(){
    if($this->userEdit){
         $this->name = $this->userEdit->name;
        $this->email = $this->userEdit->email;
    }else{
        $this->name = "";
        $this->email = "";
    }

}

    public function closeandReset(){
        $this->formOpen = false;
        $this->uid = false;
    }

    public function saveUser(){
    if($this->password){
        $this->validate(
            [
               'name' => 'required|string|max:255',
               'email' => 'required|string|email|max:255',
               'password' => 'sometimes|string|confirmed|min:8',
               'password_confirmation'=> 'sometimes',
            ]
        );
         $this->userEdit->password = Hash::make($this->password);
         $this->userEdit->name = $this->name;
         $this->userEdit->email = $this->email;
         $this->userEdit->save();
         session()->flash('message', 'contact successfully updated.');
         $this->reset(['name','email','password','password_confirmation']);
         $this->formOpen=false;

    }else{
        $this->validate([
            'name' => 'required|string|max:255',
             'email' => 'required|string|email|max:255',
        ]);
         $this->userEdit->name = $this->name;
         $this->userEdit->email = $this->email;
         $this->userEdit->save();
         session()->flash('message', 'contact successfully updated.');
         $this->reset(['name','email']);
         $this->formOpen=false;
    }
    $this->usersList = User::select(['id','name'])->get();
    $this->closeandReset();
    $this->emit('nameChanged');

    }


    public function render()
    {
        return view('livewire.edit-user');
    }
}
