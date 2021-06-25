<div class="{{ ($formclass != '') ? $formclass : '' }}" wire:ignore>
  <label>{{ $label }}</label>
    <select 
      class="form-control {{$category}}"
      name="{{$name}}"
      {{ ($multiple) ? 'multiple' : ''}}
    >
      {{$options}}
    </select>
  @error($name)
  <div class="invalid-feedback">
    {{ $message }}
  </div>
   @enderror
</div>
@if($category == 'selectric')
  @push('js')
  <script>
  $('select').on('selectric-before-init', function(event, element, selectric) {
    if(event.target.name == "{{$name}}"){
      
      @this.set("{{$name}}", event.target.value);
    }
  });
  $('select').on('selectric-change', function(event, element, selectric) {
    if(event.target.name == "{{$name}}"){
      console.log(event);
      @this.set("{{$name}}", event.target.value);
    }
  });
  </script>
  @endpush
@endif