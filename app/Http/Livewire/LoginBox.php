<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginBox extends Component
{
    public $userName = null;
    public $userPassword = null;

    protected $rules = [
        "userName" => ['required'],
        "userPassword" => ['required'],
    ];

    public function updated($propName){
        $this->ValidateOnly($propName);
    }

    public function render()
    {
        $hasError = $this->getErrorBag()->isNotEmpty();
        if(isset($this->userName, $this->userPassword) && !$hasError){
            $canLogin = True;
        }else{
            $canLogin = False;
        }

        return view('livewire.login-box', [
            "canLogin" => $canLogin,
        ]);
    }

    public function doLogin(){
        $validData = $this->validate();

        if (Auth::attempt(["name" => $validData['userName'], "password" => $validData['userPassword']])) {
            return redirect()->to('dashboard');
        }else{
            $this->addError('LoginMessage', 'Fail to Login');
        }
    }
}
