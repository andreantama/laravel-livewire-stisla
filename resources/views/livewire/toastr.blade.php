<div>
    <button class="btn btn-primary" wire:click="$emit('msg',  'as', 'asa', 'success')">Launch</button>
</div>
@push('js')
<script>
    Livewire.on('msg', (titlePar,msg,status) => {
        if(status === 'success') {
            iziToast.success({
                title: titlePar,
                message: msg,
                position: 'topRight'
            });
        } else if(status == 'info') {
            iziToast.info({
                title: titlePar,
                message: msg,
                position: 'topRight'
            });
        } else if(status == 'warning') {
            iziToast.warning({
                title: titlePar,
                message: msg,
                position: 'topRight'
            });
        } else if(status == 'error') {
            iziToast.error({
                title: titlePar,
                message: msg,
                position: 'topRight'
            });
        }
    });
</script>
@endpush
