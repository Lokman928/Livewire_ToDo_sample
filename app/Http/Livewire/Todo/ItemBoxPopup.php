<?php

namespace App\Http\Livewire\Todo;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use App\Models\ToDoItem;

class ItemBoxPopup extends Component
{
    public $itemID = null;
    public $itemTitle = null;
    public $itemDetail = null;
    
    protected $rules = [
        'itemTitle' => ['required'],
    ];

    protected $listeners = [
        'resetPopup' => "resetPopup",
        'getItem' => "getItem"
    ];

    public function updated($propName){
        $this->ValidateOnly($propName);
    }

    public function render()
    {
        $hasError = $this->getErrorBag()->isNotEmpty();
        if(isset($this->itemTitle) && !$hasError){
            $canSave = True;
        }else{
            $canSave = False;
        }
        return view('livewire.todo.item-box-popup', [
            'canSave' => $canSave
        ]);
    }

    public function getItem($payload){
        $this->itemID = $payload["ItemID"];
        $item = ToDoItem::select()
            ->where('id', $this->itemID)
            ->where('user_id', Auth::id())
            ->first();
        $this->itemTitle = $item['title'];
        $this->itemDetail = $item['detail'];

        $this->openPopup();
    }

    public function saveToDo(){
        $currentUserID = Auth::id();
        $validData = $this->validate([
            'itemTitle' => ['required'],
            'itemDetail' => [],
        ]);

        if(isset($this->itemID)){
            $ToDoItem = ToDoItem::select()
                ->where('id', $this->itemID)
                ->where('user_id', Auth::id())
                ->first();
            $ToDoItem->title = $validData['itemTitle'];
            $ToDoItem->detail = $validData['itemDetail'];
            $ToDoItem->update();
            $this->emit('updateItem-'.$this->itemID);
        }else{
            $ToDoItem = new ToDoItem();
            $ToDoItem->user_id = $currentUserID;
            $ToDoItem->title = $validData['itemTitle'];
            $ToDoItem->detail = $validData['itemDetail'];
            $ToDoItem->save();
            $this->emit('updateItem');
        }

        $this->closePopup();
    }

    public function resetPopup(){
        $this->itemID = null;
        $this->itemTitle = null;
        $this->itemDetail = null;
    }

    public function closePopup(){
        $this->dispatchBrowserEvent('closePopup');
    }

    public function openPopup(){
        $this->dispatchBrowserEvent('openPopup');
    }
}
