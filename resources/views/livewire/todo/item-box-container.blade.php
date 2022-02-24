<div class="grow overflow-y-auto" id="main_content" data-accordion="open">
    @foreach ($Item_id_array as $item_id)
        @livewire('todo.item-box-component', [
            'ItemID' => $item_id
        ], key($item_id))
    @endforeach
</div>