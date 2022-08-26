<div>
    <h1>Show Tweets</h1>

    <p>{{ $content }}</p>

    <form method="POST" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model="content">
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <button>Criar Tweet</button>
    </form>
    <hr>

    @foreach ($tweets as $tweet)
        {{ $tweet->user->name }} - {{ $tweet->content }}
        <hr>
    @endforeach

    <hr>
    <div>
        {{ $tweets->links() }}
    </div>
</div>
