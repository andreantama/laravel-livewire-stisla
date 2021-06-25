<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Register extends Component
{
    public $firstname;
    public $lastname;
    public $password;
    public $email;
    public $repassword;
    public $country;
    public $country2;
    public function render()
    {
        return view('livewire.admin.register');
    }
}
