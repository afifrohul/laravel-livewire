<?php

namespace App\Livewire;


use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.guest')]
class Login extends Component
{
    public \App\Livewire\Forms\LoginForm $form;

    public function login()
    {
        $this->form->store();
    }

    public function render()
    {
        return view('livewire.login');
    }
}
