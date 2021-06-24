<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Auth extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];
    public function authorize()
    {
        $this->validate();
    }
    public function render()
    {
        return view('livewire.admin.auth');
    }
}
