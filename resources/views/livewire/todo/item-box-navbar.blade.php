<nav class="flex flex-none items-center bg-blue-500 px-4 py-2">
    <div class="flex-grow font-sans text-xl text-white">
        ToDo list by using <a href="https://laravel-livewire.com" target="_blank"
            class="font-bold underline decoration-white decoration-2 underline-offset-2">Laravel Livewire</a>
        and <a href="https://tailwindcss.com/" target="_blank"
            class="font-bold underline decoration-white decoration-2 underline-offset-2">tailwind css</a>.
    </div>
    <div>
        <button id="button_add" class="py-2 px-4 bg-yellow-400 hover:bg-yellow-500 font-bold text-white text-center inline-flex items-center rounded-lg">
            <span class="hidden lg:inline lg:mr-1">Add</span>
            <svg class="lg:-mr-1 mr-0 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 20 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
            </svg>
        </button>
        <button wire:click="logout" class="py-2 px-4 bg-yellow-400 hover:bg-yellow-500 font-bold text-white text-center inline-flex items-center rounded-lg">
            <span class="hidden lg:inline lg:mr-1">Logout</span>
            <svg class="lg:-mr-1 mr-0 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 20 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
            </svg>
        </button>
    </div>
</nav>