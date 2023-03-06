<?php

namespace App\Http\Livewire\Admin;

use App\Http\Traits\ImageTrait;
use App\Models\BannerImage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddBanner extends Component
{
    use WithFileUploads, ImageTrait;

    protected $rules = ['photo' => 'required|image'];
    public $photo;

    public function save()
    {
        $this->validate();

        BannerImage::create([
            'img_path' => $this->uploadImg('uploads/banners/', $this->photo),
        ]);

        $this->reset('photo');

        $this->emit('BannerWasAdded');
    }

    public function render()
    {
        return view('livewire.admin.add-banner');
    }
}
