<div>
  <form method="POST" action="#" class="needs-validation" novalidate="">
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

    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
        Login
      </button>
    </div>
  </form>
