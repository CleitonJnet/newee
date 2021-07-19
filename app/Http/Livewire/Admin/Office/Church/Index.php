<?php

namespace App\Http\Livewire\Admin\Office\Church;

use App\Models\Church;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search;
    public $order = 'name';

    public function render()
    {
        $churches = Church::where('id', '<>', 1)->where('name', 'like', '%'.$this->search.'%')->orderBy($this->order)->paginate(10);

        return view('livewire.admin.office.church.index',compact('churches'));
    }
    public function orderBy($order)
    {
        return $this->order = $order;
    }
    public function destroy($id)
    {
        Church::destroy($id);
    }
}
