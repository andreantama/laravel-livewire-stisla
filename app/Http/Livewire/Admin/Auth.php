<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Auth extends Component
{
    public $email;
    public $password;
    public function render()
    {
        return view('livewire.admin.auth');
    }
}
