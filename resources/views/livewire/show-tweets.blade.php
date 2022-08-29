<div>


    <h1 class="text-3xl font-bold underline">
        Hello world!
      </h1>


    <h1>Show Tweets</h1>

    <p>{{ $content }}</p>

    <form method="POST" wire:submit.prevent="create">
        <input type="text" name="content" id="content" wire:model="content">
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <button>Criar Tweet</button>
    </form>
    <br>
    <hr>
    <br>

    @foreach ($tweets as $tweet)
        <div class="flex">
            <div class="w-2/8">
                {{-- {{ dd("storage/{$tweet->user->photo}") }} --}}
                @if ($tweet->user->photo)
                    <img src="{{ url("storage/{$tweet->user->photo}") }}" alt="{{ $tweet->user->name }}">
                @else
                    <img src="{{ url('imgs/no-image.jpg') }}" alt="{{ $tweet->user->name }}">
                @endif
                {{ $tweet->user->name }}
            </div>
            <div class="w-6/8">
                {{ $tweet->content }}
                @if ($tweet->likes->count())
                    <a href="#" wire:click.prevent="unlike({{ $tweet->id }})">Descurtir</a>
                @else
                    <a href="#" wire:click.prevent="like({{ $tweet->id }})">Curtir</a>
                @endif
            </div>
        </div>
    @endforeach

    <br>
    <div>
        {{ $tweets->links() }}
    </div>
</div>
