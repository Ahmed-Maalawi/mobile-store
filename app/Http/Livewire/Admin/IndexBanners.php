<?php

namespace App\Http\Livewire\Admin;

use App\Models\BannerImage;
use Livewire\Component;

class IndexBanners extends Component
{

//    protected $listeners = ['BannerWasAdded' => '$refresh'];
    public function render()
    {
        return view('livewire.admin.index-banners', ['images' => BannerImage::all()])
            ->layout('admin.layouts.app');
    }
}
