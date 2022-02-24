{{-- item --}}
<div class="bg-white items-center py-4 px-4 ToDo-item border-b-2 border-b-gray-300 ">
    {{-- Header --}}
    <div class="flex items-center ToDo-item-header">
        <div class="inline-block flex-grow truncate">
            {{ $ToDoItem->isDone ? "[DONE]" : "" }} {{ $ToDoItem->title }}
        </div>
        <div class="flex items-center space-x-5">
            @php
                if($ToDoItem->isDone){
                    $buttonCSS = "border-white/0 hover:border-green-500 text-green-500";
                }else{
                    $buttonCSS = "border-green-500 text-white hover:text-green-500";
                }
            @endphp
            <button wire:click="changeDoneStatus" class="border-2 rounded-full font-bold text-center inline-flex items-center {{ $buttonCSS }}">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </button>
            <button wire:click="changeShowStatus">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
        </div>
    </div>
    {{-- Header / End--}}
    {{-- Body --}}
    <div class="ToDo-item-body collapsible">
        <div class="w-full">
            {!! nl2br(e($ToDoItem->detail)) !!}
        </div>
        <div class="flex flex-row-reverse text-ellipsis">
            <button wire:click="requestUpdate" class="border-2 border-gray-400 rounded-lg hover:bg-gray-400 text-gray-400 hover:text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
            </button>
        </div>
    </div>
    
    {{-- Body / End--}}
</div>
{{-- item / End --}}