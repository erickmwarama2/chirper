<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>
        @forelse($chirps as $chirp)
                <x-chirp :chirp="$chirp" />
        @empty
            <p>No chirps yet. Be the first to chirp! </p>
        @endforelse
        </x-layout>