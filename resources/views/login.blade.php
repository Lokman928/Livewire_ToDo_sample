@extends('layout.guest')

@section('title', "Login")

@section('main_content')
<div class="relative flex flex-col items-top justify-center h-full sm:items-center py-4 sm:pt-0">
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="rounded-xl text-left bg-white shadow-lg px-8 py-6">
            <h3 class="text-2xl font-bold text-center mb-10">
                ToDo list
            </h3>
            <h3 class="text-2xl font-bold text-center">
                Login
            </h3>
            @livewire('login-box')
        </div>
    </div>
</div>
@endsection