<x-app-layout title="Explore Tweets">
    {{-- @slot('header')
        Explore Tweets
    @endslot --}}
    <x-container>
       <div class="grid grid-cols-12 gap-6">
           <div class="col-span-7">
                <form action="{{ route('tweets.store') }}" method="post">
                    @csrf
                    <div class="rounded-xl-p-5">
                        <div class="flex">
                            <div class="flex-shrink-0 mr-3">
                                <img class="w-10 h-10 mt-1 rounded-full" src="{{ auth()->user()->gravatar() }}" alt="{{ auth()->user()->name }}">
                            </div>
                            <div class="w-full">
                                <h1 class="font-semibold">{{ auth()->user()->name }}</h1>
                                <div class="my-2">
                                    <textarea name="content" id="content" placeholder="Welcome back {{ auth()->user()->name }}, what is on your mind?" class="form-textarea w-full rounded-xl border-gray-300 resize-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-200"></textarea>
                                    @error('content')
                                        <div class="text-red-600 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div>
                                    <x-button>Create tweet</x-button>
                                </div>
                            </div>
                        </div>
                   </div>
                </form>
                <div class="space-y-6 mt-5">
                    <div class=" space-y-5">
                        <x-tweets :tweets="$tweets"></x-tweets>
                    </div>
                    <div class="mt-3 pt-3">
                        {{ $tweets->links() }}
                    </div>
                </div>
           </div>
           <div class="col-span-5">
                <div class="border p-5 rounded-xl">
                    <h1 class="font-semibold mb-5">Followers</h1>
                    <div class="space-y-5">
                        <x-following :users="auth()->user()->following()->limit(5)->paginate(6)"></x-following>
                    </div>
                </div>
           </div>
       </div>
    </x-container>
</x-app-layout>
