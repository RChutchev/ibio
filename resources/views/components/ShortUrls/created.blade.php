<form action="{{ route('guest.short-urls.create') }}" method="post">
    @csrf
    <div class="mb-6 transform overflow-hidden rounded-xl bg-white shadow-xl transition-all sm:mx-auto sm:w-full sm:max-w-2xl" style="">
        <div class="px-6 py-4">
            <div class="mt-4">
                <div class="col-span-6 sm:col-span-3 mt-3">
                    <label class="block text-md text-gray-700" for="long-url">
                        <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" height="16" width="20" viewBox="0 0 640 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z" />
                        </svg>
                        <span>Your Long URL</span>
                    </label>
                    <input class="rounded-xl border border-gray-300 shadow-sm focus:border-black focus:ring-0 disabled:bg-gray-100 py-2 text-md px-4 mt-2 w-full" type="text" id="long-url" name="long-url" readonly="readonly" value="{{ $longUrl }}">
                </div>
                <div class="col-span-6 sm:col-span-3 mt-3">
                    <label class="block text-md text-gray-700" for="short-url">
                        <svg class="inline-block" xmlns="http://www.w3.org/2000/svg" height="16" width="18" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                            <path d="M234.7 42.7L197 56.8c-3 1.1-5 4-5 7.2s2 6.1 5 7.2l37.7 14.1L248.8 123c1.1 3 4 5 7.2 5s6.1-2 7.2-5l14.1-37.7L315 71.2c3-1.1 5-4 5-7.2s-2-6.1-5-7.2L277.3 42.7 263.2 5c-1.1-3-4-5-7.2-5s-6.1 2-7.2 5L234.7 42.7zM46.1 395.4c-18.7 18.7-18.7 49.1 0 67.9l34.6 34.6c18.7 18.7 49.1 18.7 67.9 0L529.9 116.5c18.7-18.7 18.7-49.1 0-67.9L495.3 14.1c-18.7-18.7-49.1-18.7-67.9 0L46.1 395.4zM484.6 82.6l-105 105-23.3-23.3 105-105 23.3 23.3zM7.5 117.2C3 118.9 0 123.2 0 128s3 9.1 7.5 10.8L64 160l21.2 56.5c1.7 4.5 6 7.5 10.8 7.5s9.1-3 10.8-7.5L128 160l56.5-21.2c4.5-1.7 7.5-6 7.5-10.8s-3-9.1-7.5-10.8L128 96 106.8 39.5C105.1 35 100.8 32 96 32s-9.1 3-10.8 7.5L64 96 7.5 117.2zm352 256c-4.5 1.7-7.5 6-7.5 10.8s3 9.1 7.5 10.8L416 416l21.2 56.5c1.7 4.5 6 7.5 10.8 7.5s9.1-3 10.8-7.5L480 416l56.5-21.2c4.5-1.7 7.5-6 7.5-10.8s-3-9.1-7.5-10.8L480 352l-21.2-56.5c-1.7-4.5-6-7.5-10.8-7.5s-9.1 3-10.8 7.5L416 352l-56.5 21.2z" />
                        </svg>
                        <span>Short URL</span>
                    </label>
                    <input class="rounded-xl border border-gray-300 shadow-sm focus:border-black focus:ring-0 disabled:bg-gray-100 py-2 text-md px-4 mt-2 w-full" type="text" id="short-url" name="short-url" readonly="readonly" value="{{ $shortUrl }}">
                </div>
            </div>
        </div>
        <div class="bg-gray-100 px-6 py-4 text-right">
            <a href="{{ route('short-urls') }}" target="_blank" class="w-max px-4 py-2 text-md inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-primary-600 to-secondary-600 font-normal font-medium text-white transition hover:from-primary-600 hover:to-primary-600 focus:outline-none disabled:opacity-25 ml-2"> My URLs </a>
            <a href="#" id="shorten-another" class="w-max px-4 py-2 text-md inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-primary-600 to-secondary-600 font-normal font-medium text-white transition hover:from-primary-600 hover:to-primary-600 focus:outline-none disabled:opacity-25 ml-2"> Shorten another </a>
        </div>
    </div>
</form>