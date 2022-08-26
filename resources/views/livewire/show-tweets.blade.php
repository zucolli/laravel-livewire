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
        @if ($tweet->likes->count())
        <a href="#" wire:click.prevent="unlike({{ $tweet->id }})">Descurtir</a>
        @else
            <a href="#" wire:click.prevent="like({{ $tweet->id }})">Curtir</a>
        @endif
        <hr>
    @endforeach

    <hr>
    <div>
        {{ $tweets->links() }}
    </div>
</div>
