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
        {{-- @slot('others')
        @endslot --}}
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
    @if(isset($others))
    {{ $others }}
    @endif
  >
  @error($name)
  <div class="invalid-feedback">
    {{ $message }}
  </div>
   @enderror
</div>


```