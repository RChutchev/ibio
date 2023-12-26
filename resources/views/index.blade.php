@extends('layouts.home')

@section('page-title')
{{ __(config('app.name') . " | Your only one bio link") }}
@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
@endpush

@section('content')
<div class="w-full flex flex-col items-center justify-center py-20 px-5">
    <div class="text-center">
        <h1 class="font-bold text-5xl text-transparent bg-clip-text bg-gradient-to-r from-primary-800 to-primary-600">{{ __("Get one link for all of your links!") }}</h1>
        <p class="text-xl mt-5">{{ __("With " . config('app.name') . " you can simply put all of your links into one and share it on your social media") }}</p>
    </div>
    <div class="container flex items-center justify-center mt-10">
        <form action="{{ route('guest.links.create') }}" method="post" id="guest-shorten">
            @csrf
            <div class="mb-6 transform overflow-hidden rounded-xl bg-white shadow-xl transition-all sm:mx-auto sm:w-full sm:max-w-2xl" style="">
                <div class="px-6 py-4">
                    <div class="text-lg">
                        <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z" />
                        </svg>
                        Shorten a long URL
                    </div>
                    <div class="mt-4">
                        <div class="col-span-6 sm:col-span-3 mt-3"><label class="block text-md text-gray-700" for="destination"><span>Destination</span></label><input class="rounded-xl border border-gray-300 shadow-sm focus:border-black focus:ring-0 disabled:bg-gray-100 py-2 text-md px-4 mt-2 w-full" type="text" id="destination" name="destination">
                            <div class="mt-2" style="display: none;">
                                <p class="text-sm text-red-600"></p>
                            </div>
                        </div>
                        <div class="text-lg mt-3">
                            <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                                <path d="M234.7 42.7L197 56.8c-3 1.1-5 4-5 7.2s2 6.1 5 7.2l37.7 14.1L248.8 123c1.1 3 4 5 7.2 5s6.1-2 7.2-5l14.1-37.7L315 71.2c3-1.1 5-4 5-7.2s-2-6.1-5-7.2L277.3 42.7 263.2 5c-1.1-3-4-5-7.2-5s-6.1 2-7.2 5L234.7 42.7zM46.1 395.4c-18.7 18.7-18.7 49.1 0 67.9l34.6 34.6c18.7 18.7 49.1 18.7 67.9 0L529.9 116.5c18.7-18.7 18.7-49.1 0-67.9L495.3 14.1c-18.7-18.7-49.1-18.7-67.9 0L46.1 395.4zM484.6 82.6l-105 105-23.3-23.3 105-105 23.3 23.3zM7.5 117.2C3 118.9 0 123.2 0 128s3 9.1 7.5 10.8L64 160l21.2 56.5c1.7 4.5 6 7.5 10.8 7.5s9.1-3 10.8-7.5L128 160l56.5-21.2c4.5-1.7 7.5-6 7.5-10.8s-3-9.1-7.5-10.8L128 96 106.8 39.5C105.1 35 100.8 32 96 32s-9.1 3-10.8 7.5L64 96 7.5 117.2zm352 256c-4.5 1.7-7.5 6-7.5 10.8s3 9.1 7.5 10.8L416 416l21.2 56.5c1.7 4.5 6 7.5 10.8 7.5s9.1-3 10.8-7.5L480 416l56.5-21.2c4.5-1.7 7.5-6 7.5-10.8s-3-9.1-7.5-10.8L480 352l-21.2-56.5c-1.7-4.5-6-7.5-10.8-7.5s-9.1 3-10.8 7.5L416 352l-56.5 21.2z" />
                            </svg>
                            Customize your link
                        </div>
                        <div class="col-span-6 sm:col-span-3 mt-2"><label class="block text-md text-gray-700" for="title"><span>Title (optional)</span></label><input class="rounded-xl border border-gray-300 shadow-sm focus:border-black focus:ring-0 disabled:bg-gray-100 py-2 text-md px-4 mt-2 w-full" type="text" id="title" name="title">
                            <div class="mt-2" style="display: none;">
                                <p class="text-sm text-red-600"></p>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-3">
                            <div class="col-span-1">
                                <div class="col-span-6 sm:col-span-3"><label class="block text-md text-gray-700" for="domain"><span>Domain</span></label><select class="rounded-xl border border-gray-300 shadow-sm focus:border-black focus:ring-0 disabled:bg-gray-100 py-2 text-md px-4 mt-2 w-full" id="domain" name="domain" disabled="">
                                        <option class="capitalize" value="">https://yourl.asia/</option>
                                    </select>
                                    <div class="mt-2" style="display: none;">
                                        <p class="text-sm text-red-600"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-1"><label class="block text-md text-gray-700" for="custom-back-half"><span>Custom back-half (optional)</span></label><input class="rounded-xl border border-gray-300 shadow-sm focus:border-black focus:ring-0 disabled:bg-gray-100 py-2 text-md px-4 mt-2 w-full" type="text" id="custom-back-half" name="keyword">
                                <div class="mt-2" style="display: none;">
                                    <p class="text-sm text-red-600"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-100 px-6 py-4 text-right">
                    <button type="submit" class="w-max px-4 py-2 text-md inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-primary-600 to-secondary-600 font-normal font-medium text-white transition hover:from-primary-600 hover:to-primary-600 focus:outline-none disabled:opacity-25 ml-2"> Shorten URL </button>
                </div>
            </div>
        </form>
    </div>
    <a href="{{ route('register') }}" class="mt-10 inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-primary-600 to-secondary-600 font-semibold font-normal text-white transition hover:from-primary-600 hover:to-primary-600 focus:outline-none disabled:opacity-25 px-4 py-2 text-xl w-max">
        {{ __("Get your FREE account now!") }}
    </a>
    <div class="container mt-10 flex items-center justify-center">
        <div class="flex flex-col items-center justify-center mx-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
            </svg>
            <div class="text-4xl mt-3">{{ \App\Models\User::query()->count() }}</div>
        </div>
        <div class="flex flex-col items-center justify-center mx-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
            </svg>
            <div class="text-4xl mt-3">{{ \App\Models\Link::query()->count() }}</div>
        </div>
        <div class="flex flex-col items-center justify-center mx-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10 text-primary-600">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42" />
            </svg>
            <div class="text-4xl mt-3">{{ \App\Models\Theme::query()->whereNull('user_id')->count() }}</div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="{{ asset('js/carousel.js') }}"></script>
<script>
    var config = {
        app_url: "{{ config('app.url') }}",
        app_name: "{{ config('app.name') }}",
    };

    jQuery(document).ready(function() {
        jQuery("#guest-shorten").submit(function(e) {
            e.preventDefault();

            var formData = jQuery(this).serialize()
            jQuery.ajax({
                type: "POST",
                url: jQuery(this).prop('action'),
                data: formData,
                dataType: "json",
                encode: true,
            }).done(function(data) {
                console.log(data);
            });
        });
    });
</script>
@endpush