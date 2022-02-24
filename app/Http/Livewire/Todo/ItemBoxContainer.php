<?php

namespace App\Http\Livewire\Todo;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Models\ToDoItem;

class ItemBoxContainer extends Component
{
    protected $listeners = [
        'updateItem' => "render"
    ];

    public function render()
    {
        $Item_id = ToDoItem::select('id')
            ->where('user_id', Auth::id())
            ->get()->pluck('id');

        return view('livewire.todo.item-box-container',[
            'Item_id_array' => $Item_id,
        ]);
    }
}
