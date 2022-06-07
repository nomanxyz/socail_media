<x-app-layout title="Your Profile">
    <div class="border-b -mt-8 py-24">
        <x-container>
            <div class="flex">
                <div class="flex-shrink-0 mr-3"><img src="{{ $user->gravatar() }}" class="rounded-full w-16 h-16 border-2 border-blue-500 p-1" alt="{{ $user->name }}"></div>
                <div>
                    <h1 class="font-semibold mb-1">{{ $user->name }} | {{ '@' . $user->username }}</h1>
                    <div class="text-sm text-gray-600 mb-1">{{ $user->email }}</div>
                    <div class="text-sm text-gray-500 mb-2">
                        Joined {{ $user->created_at->format('d F Y') }}
                    </div>
                    <div class="text-sm mb-2">
                        Web Developer.
                    </div>
                    <div class="text-sm">
                        <a href="https://github.com/novalramdhani" class="underline text-purple-600" target="_blank">https://github.com/novalramdhani</a>
                    </div>
                </div>
            </div>
        </x-container>
    </div>
    <div class="border-b mb-8">
        <x-container>
            <div class="flex">
                <div class="px-10 py-3 text-center border-r border-l">
                    <div class="text-2xl font-semibold mb-1">{{ auth()->user()->tweets->count() }}</div>
                    <div class="uppercase text-xs text-gray-500">Tweets</div>
                </div>
                <div class="px-10 py-3 text-center border-r">
                    <div class="text-2xl font-semibold mb-1">{{ auth()->user()->following->count() }}</div>
                    <div class="uppercase text-xs text-gray-500">Following</div>
                </div>
                <div class="px-10 py-3 text-center border-r">
                    <div class="text-2xl font-semibold mb-1">{{ auth()->user()->followers->count() }}</div>
                    <div class="uppercase text-xs text-gray-500">Followers</div>
                </div>
            </div>
        </x-container>
    </div>
    <x-container>
        <div class="grid grid-cols-2">
            <div class="space-y-5">
                <x-tweets :tweets="$tweets" />
            </div>
        </div>
    </x-container>
</x-app-layout>
