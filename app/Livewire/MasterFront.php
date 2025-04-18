<?php

namespace App\Livewire;

use Livewire\Component;

class MasterFront extends Component
{
    public function render()
    {
        return view('livewire.front.index')->layout('master');
    }



}

