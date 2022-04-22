<x-card>
    <x-card-body>
        <div class="h6">
            <h2 class="h5">
                <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
            </h2>

            <div>
                {{ now()->format('d.m.Y H:i:s') }}
            </div>
        </div>
    </x-card-body>
</x-card>
