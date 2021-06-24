<div>
  <form wire:submit.prevent="authorize">
    @component('components.input.input')
        @slot('formclass', 'form-group')
        @slot('label', 'email')
        @slot('name', 'email')
        @slot('typeinput', 'text')
        @slot('typemodel', 'defer')
        {{-- @slot('others')
        @endslot --}}
    @endcomponent
    @component('components.input.input')
        @slot('formclass', 'form-group')
        @slot('label', 'Password')
        @slot('name', 'password')
        @slot('typeinput', 'password')
        @slot('typemodel', 'defer')
        {{-- @slot('others')
        @endslot --}}
    @endcomponent
    @component('components.input.button')
        @slot('label', 'login')
        @slot('is_submit', true)
        @slot('classbtn', 'btn btn-primary btn-lg btn-block')
        {{-- @slot('others')
        @endslot --}}
    @endcomponent
  </form>
