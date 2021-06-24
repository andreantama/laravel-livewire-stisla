# Requirements
- PHP 7.2.5 or higher
- Yarn
- Composer
- Laravel 8
- [Laravel Livewire 2](https://github.com/livewire/livewire "Laravel Livewire 2")
- [Stisla - Free Bootstrap Admin Template](https://github.com/stisla/stisla "Stisla - Free Bootstrap Admin Template")

# Installation
- Composer install on directory laravel
```bash
composer install

```
- Open public/stisla
```bash
    yarn
```
# Documentation
- [Input](https://github.com/andreantama/laravel-livewire-stisla#input "Input")
- - [Input Components](https://github.com/andreantama/laravel-livewire-stisla#--input-component "Input Components")
- - [Button](https://github.com/andreantama/laravel-livewire-stisla#--button "Button")
- [Toastr](https://github.com/andreantama/laravel-livewire-stisla#toastr "Toastr")

# Input
## - Input Component
You can call input with 
```php
@component('components.input.input')
        @slot('formclass', 'form-group')
        @slot('label', 'email')
        @slot('name', 'email')
        @slot('typeinput', 'text')
        @slot('typemodel', 'defer')
@endcomponent
```
With real settings in in views/components/input/input.blade.php
```php
<div class="{{ ($formclass != '') ? $formclass : '' }}">
  <label>{{ $label }}</label>
  <input 
    type="{{ $typeinput }}"
    class="form-control @error($name) is-invalid @enderror"
    name="email"
    tabindex="1"
    @if($typemodel == 'lazy') 
    wire:model.lazy="{{ $name }}"
    @elseif($typemodel == 'defer')
    wire:model.defer="{{ $name }}"
    @else
    wire:model="{{ $name }}"
    @endif
  >
  @error($name)
  <div class="invalid-feedback">
    {{ $message }}
  </div>
   @enderror
</div>

```
## - Button
Call component
```php
@component('components.input.button')
        @slot('label', 'login')
        @slot('is_submit', true)
        @slot('classbtn', 'btn btn-primary btn-lg btn-block')
        {{-- @slot('others')
        @endslot --}}
    @endcomponent
```

# Toastr
Add this css file and js file on layout file
```javascript
<!-- JS Libraies -->
  <script src="{{ asset('stisla/node_modules/izitoast/dist/js/iziToast.min.js') }}"></script>
```
```html
<!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('stisla/node_modules/izitoast/dist/css/iziToast.min.css')}}">
```
add livewire Toastr after body tag
```html
<body>
  @livewire('toastr')
```
add stack css & js in layout file
```html
 @stack('style')
  @livewireStyles
</head>
```
```html
  @stack('js')

  <!-- Page Specific JS File -->
</body>
```
after that u can access toastr in controller like this with parameter ['title', 'msg', 'status'] status have 4 kind like (success, error, warning, info)
```php
$this->emit('msg',  'Berhasil', 'Anda berhasil Masuk', 'success');

```
```php
public function dehydrate()
    {
        if(count($this->getErrorBag()->all()) > 0){
            $this->emit('msg',  'Terjadi Kesalahan', 'Silahkan lengkapi semua form yang tersedia', 'error');
        }
    }
```