<?php

namespace App\Livewire\Users;

use Livewire\Component;

class Index extends Component
{
    use \Livewire\WithPagination;
    public function render()
    {
        $users = \App\Models\User::query()->latest()->paginate(10);
        return view('livewire.users.index', [
            'users' => $users
        ]);
    }
}
