<?php

namespace App\Http\Livewire\Todo;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Models\ToDoItem;

class ItemBoxComponent extends Component
{
    public $ItemID = Null;
    public $isOpen = False;

    protected function getListeners(){
        return [
            'updateItem-'.$this->ItemID => 'render'
        ];
    }

    public function mount($ItemID){
        $this->ItemID = $ItemID;
    }

    public function render()
    {
        $ToDoItem = ToDoItem::select()
            ->where('id', $this->ItemID)
            ->where('user_id', Auth::id())
            ->first();

        return view('livewire.todo.item-box-component',[
            'ToDoItem' => $ToDoItem,
        ]);
    }

    public function changeDoneStatus(){
        $ToDoItem = ToDoItem::select()
            ->where('id', $this->ItemID)
            ->where('user_id', Auth::id())
            ->first();
        
        $ToDoItem->isDone = !$ToDoItem->isDone;
        $ToDoItem->update();
    }

    public function changeShowStatus(){
        $this->isOpen = !$this->isOpen;
        $this->dispatchBrowserEvent('changeShowStatus', ['wire_id' => $this->id]);
    }

    public function requestUpdate(){
        $this->emitTo("todo.item-box-popup", "getItem", [
            'ItemID' => $this->ItemID
        ]);
    }
}
