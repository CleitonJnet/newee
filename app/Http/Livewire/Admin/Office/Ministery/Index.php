<?php

namespace App\Http\Livewire\Admin\Office\Ministery;

use App\Models\Ministery;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $ministeries = Ministery::all();

        return view('livewire.admin.office.ministery.index',compact('ministeries'));
    }
}
