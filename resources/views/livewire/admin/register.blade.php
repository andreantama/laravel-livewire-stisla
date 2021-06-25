<div>
  <form wire:submit.prevent="store">
    <div class="row">
        @component('components.input.input')
            @slot('formclass', 'form-group col-6')
            @slot('label', 'First Name')
            @slot('name', 'firstname')
            @slot('typeinput', 'text')
            @slot('typemodel', 'defer')
        @endcomponent
        @component('components.input.input')
            @slot('formclass', 'form-group col-6')
            @slot('label', 'Last Name')
            @slot('name', 'lastname')
            @slot('typeinput', 'text')
            @slot('typemodel', 'defer')
        @endcomponent
    </div>

    @component('components.input.input')
        @slot('formclass', 'form-group')
        @slot('label', 'Email')
        @slot('name', 'email')
        @slot('typeinput', 'email')
        @slot('typemodel', 'defer')
    @endcomponent

                                  <div class="row">
                                    @component('components.input.input')
                                      @slot('formclass', 'form-group col-6')
                                      @slot('label', 'Password')
                                      @slot('name', 'password')
                                      @slot('typeinput', 'password')
                                      @slot('typemodel', 'defer')
                                    @endcomponent
                                    @component('components.input.input')
                                      @slot('formclass', 'form-group col-6')
                                      @slot('label', 'Password Confirmation')
                                      @slot('name', 'repassword')
                                      @slot('typeinput', 'password')
                                      @slot('typemodel', 'defer')
                                    @endcomponent
                                  </div>

     <div class="row">
     
        @component('components.input.select')
          @slot('category', 'selectric')
          @slot('multiple', false)
          @slot('formclass', 'form-group col-6')
          @slot('label', 'country')
          @slot('name', 'country')
          @slot('options')
            <option>Indonesia</option>
            <option>Palestine</option>
            <option>Syria</option>
            <option>Malaysia</option>
            <option>Thailand</option>
          @endslot
      @endcomponent
      @component('components.input.select')
          @slot('category', 'selectric')
          @slot('multiple', false)
          @slot('formclass', 'form-group col-6')
          @slot('label', 'country2')
          @slot('name', 'country2')
          @slot('options')
          <option>Indonesia 1</option>
          <option>Palestine 2</option>
          <option>Syria 3</option>
          <option>Malaysia 4</option>
          <option>Thailand 5</option>
          @endslot
      @endcomponent
        {{-- <div class="form-group col-6">
            <label>Province</label>
            <select class="form-control selectric"  name="province">
                <option>West Java</option>
                <option>East Java</option>
            </select>
        </div> --}}
      </div>

                                                      <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                          <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                                          <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                                        </div>
                                                      </div>

      @component('components.input.button')
        @slot('label')
            <i class="fas fa-sign-in-alt"></i>
            Register
        @endslot
        @slot('is_submit', true)
        @slot('classbtn', 'btn btn-primary btn-lg btn-block')
        {{-- @slot('others')
        @endslot --}}
    @endcomponent
                                                    </form>
                                                  </div>
@push('js')
<script>
  $(".pwstrength").pwstrength();
</script>
@endpush
