<x-app-layout>
    <x-slot name="header">
    <div class="flex gap-2 items-center justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Comments') }}
        </h2>
    </div>    
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>{{ $post->title }}</h2>
                    <table class="w-full">    
                        @foreach ($post->comments as $comment)
                            <tr>
                                <td class="px-2">{{ $comment->body }}</td>
                                <td class="text-right flex gap-1">
                                    <a href="{{ route('comment.delete', ['comment' => $comment->id]) }} " class="bg-red-500 p-2 rounded">
                                        <x-heroicon-o-trash class="h-4 stroke-current text-white" />
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