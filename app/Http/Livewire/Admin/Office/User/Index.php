<?php

namespace App\Http\Livewire\Admin\Office\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search;
    public $order = 'user';

    public function render()
    {
        $users = User::where('users.id','<>', 1)
            ->join('churches','users.church_id','churches.id')
            ->where(function($query){
                $query
                    ->where('users.name', 'like', '%'.$this->search.'%')
                    ->orWhere('users.email', 'like', '%'.$this->search.'%')
                    ->orWhere('churches.name', 'like', '%'.$this->search.'%');
            })
            ->select('users.id as id','users.name as user','churches.name as church',)
            ->orderBy($this->order)
            ->paginate(10);

        return view('livewire.admin.office.user.index',compact('users'));
    }
    public function orderBy($order)
    {
        return $this->order = $order;
    }
    public function destroy($id)
    {
        User::destroy($id);
    }
}
