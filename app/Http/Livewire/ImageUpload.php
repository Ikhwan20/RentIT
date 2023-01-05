<?php

namespace App\Http\Livewire;

use Livewire\Component;

use Livewire\WithFileUploads;

class ImageUpload extends Component
{
    use WithFileUploads;
    public $image;

    public function upload(Request $request) {
        $this->validate([
            'image' => 'image|max:1024', // 1MB Max
        ]);
 
       $name = $request->file('image')->getClientOriginalName();
       $request->file('image')->storeAs('public/images/profile/', $name);

       return view('livewire.image-upload', ['name' => $name]);
        
    }

    public function upload2() {
        $this->validate([
            'image2' => 'image|max:1024', // 1MB Max
        ]);
 
        $name2 = $this->image->store('images', 'public')->getClientOriginalName();

       return view('livewire.image-upload', ['name2' => $name2]);
        
    }

    public function render()
    {
        return view('livewire.image-upload');
    }
}
