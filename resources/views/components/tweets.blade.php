@forelse ($tweets as $tweet)
    <div class="border rounded-xl p-5">
        <div class="flex">
            <div class="flex-shrink-0 mr-3">
                <img class="w-10 h-10 mt-1 rounded-full" src="{{ auth()->user()->gravatar() }}" alt="{{ $tweet->user->name }}">
            </div>
            <div>
                <h1 class="font-semibold">{{ $tweet->user->name }}</h1>
                <div>
                    {{ $tweet->content }}
                </div>
                <div class="text-sm text-gray-600">{{ $tweet->created_at->diffForHumans() }}</div>
            </div>
        </div>
    </div>
    @empty
    <div class="font-semibold text-lg">You dont have any tweet yet!.</div>
@endforelse
