<div class="form-group">
  <button
    @if($is_submit)
      type="submit"
    @endif
    wire:loading.class="btn-progress"
    class="{{ $classbtn }}"
    @if(isset($others))
    {{ $others }}
    @endif
  >
    {{ $label }}
  </button>
</div>
