<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class IndexBanners extends Component
{
    public function render()
    {
        return view('livewire.admin.index-banners')->layout('admin.layouts.app');
    }
}
