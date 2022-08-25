<div>
    <h1>Show Tweets</h1>

    <p>{{ $message }}</p>

    <input type="text" name="message" id="message" wire:model="message">
    <hr>

    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }}
        <hr>
    @endforeach
</div>
