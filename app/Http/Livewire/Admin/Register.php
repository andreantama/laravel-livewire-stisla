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
    protected $rules = [
        "firstname" => 'required',
        "lastname" => 'required',
        "password" => 'required',
        'email' => 'required|email',
        'repassword' => 'required|same:password',
        'country' => 'required',
        'country2' => 'required',
    ];
    public function store()
    {
        $this->validate();
        $this->emit('msg',  'Berhasil', 'Anda telah berhasil mendaftarkan akun anda', 'success');
        $this->reset();
    }
    public function dehydrate()
    {
        if(count($this->getErrorBag()->all()) > 0){
            $this->emit('msg',  'Terjadi Kesalahan', 'Silahkan lengkapi semua form yang tersedia', 'error');
        }
    }
    public function render()
    {
        return view('livewire.admin.register');
    }
}
