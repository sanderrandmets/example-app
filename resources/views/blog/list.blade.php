<x-app-layout>
    <x-slot name="header">
    <div class="flex gap-2 items-center justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
        </h2>
        <a href="{{ route('blog.create') }}" class="px-4 py-2 pg-blue-500 rounded text-blue-200">Add Post</a>
    </div>    
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full">
                        <tr>
                            <th>{{ __('Title') }}</th>
                            <th class="px-2">{{ __('Body') }}</th>
                        </tr>     
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td class="px-2">{{ Str::limit($post->body, 100) }}</td>
                                <td class="text-right flex gap-1 justify-end">
                                    @if ($post->comments->count())
                                        <a href="{{ route('comment.list', ['post' => $post->id]) }} " class="bg-indigo-500 p-2 rounded">
                                            <x-heroicon-o-annotation class="h-4 stroke-current text-white" />
                                        </a>
                                    @endif
                                    <a href="{{ route('blog.edit', ['post' => $post->id]) }} " class="bg-yellow-500 p-2 rounded">
                                        <x-heroicon-o-pencil-alt class="h-4" />
                                    </a>
                                    <a href="{{ route('blog.delete', ['post' => $post->id]) }} " class="bg-red-500 p-2 rounded">
                                        <x-heroicon-o-trash class="h-4"/>
                                    </a>
                                </td>
                            </tr>      
                        @endforeach 
                    </table>         
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
