<x-app-layout>
    <x-slot name="header">
        <div class="flex gap-2 items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Blog') }}
            </h2>
            <button type="submit" form="newPost" class="px-4 py-2 pg-blue-500 rounded text-blue-200">Publish</button>
        </div>    
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form id="newPost" action="{{ route('blog.create') }}" method="POST">
                        @csrf

                        <div class="mt-4">
                            <x-label for="title" :value="__('Title')" />
                            <x-input id="title" class="block mt-1 w-full"
                                            type="text"
                                            name="title"
                                            required />
                        </div>
                        <div class="mt-4">
                            <x-label for="body" :value="__('Body')" />
                            <x-textarea id="body" class="block mt-1 w-full" rows="20" name="body" required></x-textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
