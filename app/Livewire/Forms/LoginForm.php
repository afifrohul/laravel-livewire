<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;

class LoginForm extends Form
{
    #[Rule('required', 'email')]
    public string $email = '';

    #[Rule('required')]
    public string $password = '';

    public function store()
    {
        if (Auth::attempt($this->validate())) {
            return redirect()->route('home');
        }

        throw \Illuminate\Validation\ValidationException::withMessages([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }
}
