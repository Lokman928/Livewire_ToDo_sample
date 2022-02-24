@extends('layout.app')

@section('title', "Dashboard")

@section('main_content')
<div class="relative flex items-top justify-center h-full items-center py-4 sm:pt-0">
    <div class="flex flex-col w-4/5 max-w-6xl rounded-xl shadow-lg h-full sm:h-1/2 bg-white overflow-hidden">
        {{-- nav bar --}}
        @livewire('todo.item-box-navbar')
        {{-- nav bar / End --}}

        @livewire('todo.item-box-container')
    </div>
</div>
@endsection

@section('popup')
    <div id="popup_mask" class="absolute top-0 left-0 h-full w-full bg-gray-400/50 hidden animate__animated">
        @livewire('todo.item-box-popup')
    </div>
@endsection