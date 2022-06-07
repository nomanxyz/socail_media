@forelse ($users as $follow)
    <div class="flex items-center">
        <div class="flex-shrink-0 mr-3">
            <img class="w-10 h-10 mt-1 rounded-full" src="{{ auth()->user()->gravatar() }}" alt="{{ $follow->name }}">
        </div>
        <div>
            <div>{{ $follow->name }}</div>
            <div class="text-sm text-gray-600">{{ $follow->pivot->created_at->diffForHumans() }}</div>
        </div>
    </div>
    @empty
    <div class="font-semibold text-lg">You dont have any followers yet!.</div>
@endforelse
