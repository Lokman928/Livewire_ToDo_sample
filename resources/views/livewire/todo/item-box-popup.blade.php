<div class="relative flex items-top justify-center h-full items-center py-4 sm:pt-0">
    <div class="flex flex-col xs:w-full md:w-2/5 max-w-6xl rounded-xl shadow-lg bg-white overflow-hidden">
        {{-- nav bar --}}
        <nav class="flex flex-none items-center bg-blue-500 px-4 py-2">
            <div class="flex-grow font-sans text-xl text-white">
                New ToDo item
            </div>
            <div class="">
                <button wire:click="closePopup" class="py-2 px-4 bg-yellow-400 hover:bg-yellow-500 font-bold text-white text-center inline-flex items-center rounded-lg">
                    Close
                </button>
            </div>
        </nav>
        {{-- nav bar / End --}}
        {{-- Body --}}
        <div class="flex flex-col px-10 py-5 space-y-4">
            <div>
                <label class="block" for="input_title">Title<label>
                <input wire:model="itemTitle" id="input_title" type="text" placeholder="Title" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
            </div>
            <div>
                <label class="block" for="input_detail">Detail<label>
                <textarea wire:model="itemDetail" id="input_detail" rows="5" placeholder="Type the detail here" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600"></textarea>
            </div>
            <div class="flex justify-evenly">
                <button wire:click="resetPopup" class="block py-2 px-4 border-2 border-gray-400 hover:border-gray-500 font-bold text-gray-400 hover:text-gray-500 text-center items-center rounded-lg">
                    Reset
                </button>
                @php
                    if($canSave){
                        $buttonCSS = "bg-green-400 hover:bg-green-500";
                    }else{
                        $buttonCSS = "bg-gray-600";
                    }
                @endphp
                <button wire:click="saveToDo" class="block py-2 px-4 font-bold text-white text-center items-center rounded-lg {{ $buttonCSS }}" {{ $canSave ? "" : "disabled" }}>
                    Save
                </button>
            </div>
        </div>
        {{-- Body / End--}}
    </div>
</div>