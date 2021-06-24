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
