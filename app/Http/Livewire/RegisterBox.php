<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class RegisterBox extends Component
{
    public $userName = null;
    public $userPassword = null;
    public $userConfirmPassword = null;

    protected $rules = [
        "userName" => ['required', 'regex:/^[A-Za-z0-9]+$/i'],
        "userPassword" => ['required', 'min:8'],
        "userConfirmPassword" => ['required']
    ];

    public function updated($propName){
        $this->ValidateOnly($propName);
    }

    public function render()
    {
        $hasError = $this->getErrorBag()->isNotEmpty();
        if(isset($this->userName, $this->userPassword, $this->userConfirmPassword) && !$hasError){
            $canRegister = True;
        }else{
            $canRegister = False;
        }

        return view('livewire.register-box', [
            'canRegister' => $canRegister,
        ]);
    }

    public function doRegister(){
        $validate = $this->Validate([
            'userName' => ['required', 'regex:/^[A-Za-z0-9]+$/i'],
            'userPassword' => ['required', 'min:8'],
            'userConfirmPassword' => ['required', 'same:userPassword']
        ]);
        
        $user = new User();
        $user->name = $validate['userName'];
        $user->password = Hash::make($validate['userPassword']);
        $user->save();
        
        auth()->login($user);

        return redirect()->to('dashboard');
    }
}
