<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Attribute;

class Dashboard extends Component
{
 
    public function render()
    {
        return view('livewire.admin.dashboard.main');
    }

}
