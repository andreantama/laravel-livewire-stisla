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
        $this->emit('msg',  'Berhasil', 'Anda berhasil Masuk', 'success');
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
        return view('livewire.admin.auth');
    }
}
