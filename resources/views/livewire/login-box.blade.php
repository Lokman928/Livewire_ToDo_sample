<form wire:submit.prevent="doLogin" class="mt-4">
    <div>
        <label class="block" for="input_name">Name<label>
        <input wire:model="userName" id="input_name" type="text" placeholder="Name" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
    </div>
    <div class="mt-4">
        <label class="block" for="input_password">Password<label>
        <input wire:model="userPassword" id="input_password" type="password" placeholder="Password" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
    </div>
    <div class="flex items-baseline justify-between">
        @php
            if($canLogin){
                $buttonCSS = "bg-blue-600 hover:bg-blue-900";
            }else{
                $buttonCSS = "bg-gray-600";
            }
        @endphp
        <button type="submit" class="px-6 py-2 mt-4 text-white rounded-lg {{ $buttonCSS }}" {{ !$canLogin ? "disabled" : "" }}>Login</button>
        <a href="{{ url('/register') }}" class="text-sm text-blue-600 hover:underline">Need Register?</a>
    </div>
    @error('LoginMessage')
        <label class="text-red-700 text-sm font-semibold">{{ $message }}</label>
    @enderror
</form>
