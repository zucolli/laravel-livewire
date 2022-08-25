<div>
    <h1>Show Tweets</h1>

    <p>{{ $message }}</p>

    <form method="POST" wire:submit.prevent="create">
        <input type="text" name="message" id="message" wire:model="message">
        <button>Criar Tweet</button>
    </form>
    <hr>

    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }}
        <hr>
    @endforeach
</div>
