<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="file" id="fileToUpload">
                        <input type="text" name="name" placeholder="name">
                        <input type="submit" name="subimt" id="">
                    </form>
                    @foreach ($content as $item)
                        <a href="{{ Storage::url($item->file) }}"><h2>{{ $item->name }}</h2></a><!--h-4-->
                        <a href="{{ route('content.delete', ['item' => $item->id]) }}" class="bg-red-500 p-2 rounded"><x-heroicon-o-trash class="h-4"/></a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


