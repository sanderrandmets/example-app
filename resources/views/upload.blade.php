<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<!--@extends("layouts.main")
@section("content")
<div class="flex justify-center mt-4">
    <div class="p-1 text-white text-5xl mb-3">
        <button class="text-white" type="submit">Upload File:</button>
    </div>
</div>    
<div class="p-30 flex justify-center">
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file"> <br> <br>
    </form>
</div>
@endsection-->