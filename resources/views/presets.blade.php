@extends("layouts.main")
@section("content")
    <div class="px-36 mt-4"><!--text-3xl-->
        <div class="p-1 text-white text-5xl mb-3">Presets:</div>
        <div class="p-1">
            <a href="/free-presets" class="text-white pb-4 text-3xl">1) Free presets</a>
        </div>
        <div class="p-1">
            <a href="/popular-presets" class="text-white pb-4 text-3xl">2) Popular presets</a>
        </div>
        <div class="p-1">
            <a href="/our-presets" class="text-white pb-4 text-3xl">3) Our presets</a>
        </div>
    </div>    
@endsection