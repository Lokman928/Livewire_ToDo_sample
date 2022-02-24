<?php

namespace App\Http\Livewire\Todo;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ItemBoxNavbar extends Component
{
    public function render()
    {
        return view('livewire.todo.item-box-navbar');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
