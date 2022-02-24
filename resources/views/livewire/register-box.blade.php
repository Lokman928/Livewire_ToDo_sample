<form wire:submit.prevent="doRegister" class="mt-4">
    <div>
        <label class="block">
            Name
            <span data-tooltip-target="tooltip-name">
                <svg class="inline-block w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </span>
        <label>
        <input wire:model="userName" type="text" placeholder="Name" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        @error('userName')
            <label class="block text-red-700 text-sm font-semibold">Invalid User Name</label>
        @enderror

        <div id="tooltip-name" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
            User name only can be: A-Z, a-z, 0-9.
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
    <div class="mt-4">
        <label class="block">
            Password
            <span data-tooltip-target="tooltip-password">
                <svg class="inline-block w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </span>
        <label>
        <input wire:model="userPassword" type="password" placeholder="Password" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        @error('userPassword')
            <label class="block text-red-700 text-sm font-semibold">Invalid Password</label>
        @enderror

        <div id="tooltip-password" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
            Password show at least 8 characters.
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
    <div class="mt-4">
        <label class="block">Confirm Password<label>
        <input wire:model="userConfirmPassword" type="password" placeholder="Confirm Password" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
        @error('userConfirmPassword')
            <label class="text-red-700 text-sm font-semibold">Invalid Password</label>
        @enderror
    </div>
    <div class="flex items-baseline justify-between">
        @php
            if($canRegister){
                $buttonCSS = "bg-blue-600 rounded-lg hover:bg-blue-900";
            }else{
                $buttonCSS = "bg-gray-600";
            }
        @endphp
        <button wire:keydown.enter="doRegister" class="px-6 py-2 mt-4 text-white rounded-lg {{ $buttonCSS }}" {{ !$canRegister ? "disabled" : "" }}>Register</button>
        <a href="{{ url('/login') }}" class="text-sm text-blue-600 hover:underline">Have account?</a>
    </div>
</form>
