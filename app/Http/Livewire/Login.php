<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $form = [
        'email'    => '',
        'password' => ''
    ];

    public function render()
    {
        return view('livewire.login')
            ->layout('layouts.guest');
    }

    public function submit()
    {
        $this->validate([
            'form.email' => 'required|email',
            'form.password' => 'required'
        ]);

        if (Auth::attempt($this->form) === false) {
            $this->addError('credential', 'Your username and password do not match.');
            return false;
        }

        return redirect('/');
    }
}
