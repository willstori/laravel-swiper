<?php

namespace App\Livewire;

use App\Models\Banner;
use Livewire\Component;

class ListBanner extends Component
{
    public $type = '';

    public $banners;

    public function mount()
    {
        $this->type = 'type 1';

        $this->banners = Banner::where('banners.type', $this->type)->get();
    }

    public function filterBanners($type)
    {
        $this->type = $type;

        $this->banners = Banner::where('banners.type', $this->type)->get();

        $this->dispatch('refresh-banners');
    }

    public function render()
    {
        return view('livewire.list-banner');
    }
}
