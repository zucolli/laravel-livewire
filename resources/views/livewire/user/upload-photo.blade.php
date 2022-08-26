<div>
    <h1>Atualizar Foto Perfil</h1>

    <form action="#" method="post" wire:submit.prevent="storagePhoto">
        <input type="file" wire:model="photo">
        <br>
        @error('photo') {{ $message }} <br> @enderror
        <button type="submit">Upload Foto</button>
    </form>

</div>
