<?php

namespace App\Http\Livewire;
use App\Models\Still;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;

class ImageUpload extends Component
{
    use WithFileUploads;

    public $photo;
    public $placement = 1;
    public $photocategory;
    protected $rules =[
        'photo' => 'required|image|max:5120',
        'photocategory' => 'required|in:aerial,portrait,architectureR,architectureC,artists,cuisine,events'

    ];


   public function updated($prop){
       $this->validateOnly($prop);

    }



    public function save()
   {
        $this->validate();


        if(DB::table('stills')->where('filename', $this->photo->getClientOriginalName() )->doesntExist()){
            $still=new Still;
            $still->filename = $this->photo->getClientOriginalName();
            $still->category = $this->photocategory;
            $still->placement= $this->placement;
            $still->save();
            $this->photo->storeAS('stills/'.$this->photocategory,$this->photo->getClientOriginalName() );
            session()->flash('message', 'photo successfully uploaded');
            return redirect()->route('list', ['autocat'=> $this->photocategory]);
        } else {
            $this->reset();
            session()->flash('message', 'photo unsuccessfully uploaded the file name already exists. please rename');

        }

    }
    public function mount(){
        $this->photocategory="aerial";
    }

    public function render()
    {
        return view('livewire.image-upload');
    }
}
