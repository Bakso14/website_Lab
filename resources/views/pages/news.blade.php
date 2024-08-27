@extends('components.main')
@section('link')
    <link rel="stylesheet" href="{{ asset('src/carousel.css') }}">
@endsection
@section('container')
    <div class="drawer">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- Navbar -->
            @include('components.navbar')
            <!-- Page content here -->
            <!-- Title News -->
            <div class="hero min-h-52" style="background-image: url('/assets/landing-page-picture.png');">
                <div class="hero-overlay bg-opacity-70"></div>
                <div class=" text-left text-neutral-content">
                    <div class="flex flex-col lg:flex-row justify-between  max-w-2xl w-[80vw] text-white">
                        <h1 class="mb-5 mt-14 text-5xl font-bold">News</h1>
                        <form action="{{ url("/news") }}" method="GET">
                            <div class="flex gap-2">
                                <label class="input lg:mt-14 input-bordered border-white flex items-center bg-transparent">
                                    <input type="text" name="search" class="grow" placeholder="Search" />
                                </label>
    
                                <button class="btn lg:mt-14" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                                        class="w-4 h-4 opacity-70">
                                        <path fill-rule="evenodd"
                                            d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Main News -->

            @isset($categories)
                @if (count($news) == 0)
                <div class="flex mt-14 justify-center">
                    <h1 class="text-2xl font-bold">No Latest News</h1>
                </div>
                @else
                    <div class="flex justify-center">
                        <div class="container pt-10 flex">
                            <div class="w-full lg:w-1/2 p-2">
                                <a href="{{ url("/news/{$news[0]->slug}") }}">
                                    <div class="h-96 relative text-white text-3xl text-right"
                                        style="background-image: url('storage/{{ $news[0]->image }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                        <div
                                            class="transition duration-300 h-full bg-gradient-to-b from-transparent to-black hover:opacity-50">
                                            <div class="absolute bottom-10 right-10 ">
                                                {{ $news[0]->title }}
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class=" hidden lg:flex lg:flex-col lg:w-1/2 p-2">
                                <div class="flex ">
                                    @isset($news[1])
                                        <div class="w-full h-48 lg:w-1/2 pr-1 pb-1">
                                            <a href="{{ url("news/{$news[1]->slug}") }}">
                                                <div class="h-full text-white relative text-xl text-right"
                                                    style="background-image: url('storage/{{ $news[1]->image }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                                    <div
                                                        class="transition duration-300 h-full bg-gradient-to-b from-transparent to-black hover:opacity-50">
                                                        <div class="absolute bottom-5 right-5 ">
                                                            {{ $news[1]->title }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endisset
                                    @isset($news[2])
                                        <div class="w-full h-48 lg:w-1/2 pl-1 pb-1">
                                            <a href="{{ url("news/{$news[2]->slug}") }}">
                                                <div class="h-full text-white relative text-xl text-right"
                                                    style="background-image: url('storage/{{ $news[2]->image }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                                    <div
                                                        class="transition duration-300 h-full bg-gradient-to-b from-transparent to-black hover:opacity-50">
                                                        <div class="absolute bottom-5 right-5 ">
                                                            {{ $news[2]->title }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endisset

                                </div>

                                <div class="flex">
                                    @isset($news[3])
                                        <div class="w-full h-48 lg:w-1/2 pr-1 pt-1">
                                            <a href="{{ url("news/{$news[3]->slug}") }}">
                                                <div class="h-full text-white relative text-xl text-right"
                                                    style="background-image: url('storage/{{ $news[3]->image }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                                    <div
                                                        class="transition duration-300 h-full bg-gradient-to-b from-transparent to-black hover:opacity-50">
                                                        <div class="absolute bottom-5 right-5 ">
                                                            {{ $news[3]->title }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endisset
                                    @isset($news[4])
                                        <div class="w-full h-48 lg:w-1/2 pl-1 pt-1">
                                            <a href="{{ url("news/{$news[4]->slug}") }}">
                                                <div class="h-full text-white relative text-xl text-right"
                                                    style="background-image: url('storage/{{ $news[4]->image }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                                    <div
                                                        class="transition duration-300 h-full bg-gradient-to-b from-transparent to-black hover:opacity-50">
                                                        <div class="absolute bottom-5 right-5 ">
                                                            {{ $news[4]->title }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endisset


            @isset($categories)
                @foreach ($categories as $category)
                    <div class="flex justify-center">
                        <div class="container p-2 flex flex-col">

                            <div class="flex justify-between py-5">
                                <div class="flex">
                                    <div class="w-2 bg-red-500"></div>
                                    <h2 class=" text-2xl font-bold ms-2">{{ $category->name }}</h2>
                                </div>
                                <a class="mr-2" href="{{ url("news/category/{$category->id}") }}">See More ></a>
                            </div>
                            <div class="flex flex-wrap">
                                @foreach ($category->news as $news_category)
                                    <div class="w-full sm:w-1/2 lg:w-1/4 p-2">
                                        <a href="{{ url("news/{$news_category->slug}") }}">
                                            <div class="flex flex-col">
                                                <div class="h-48 rounded-lg"
                                                    style="background-image: url('storage/{{ $news_category->image }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">

                                                </div>
                                                <div class="font-bold pt-2">{{ $news_category->title }}</div>
                                                <div class="opacity-50 text-xs">
                                                    {{ \Carbon\Carbon::parse($news_category->created_at)->translatedFormat('d F Y, H:i') }}
                                                </div>
                                                <div class="py-2">{{ getShortDescription($news_category->content, 20) }}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                @endforeach
            @endisset

            @isset($search)
            <div class="flex justify-center">
                <div class="container  p-2">
                    @forelse ($news as $item)
    
                        <div class="w-full sm:w-1/2 lg:w-1/4 p-2">
                            <a href="{{ url("news/{$item->slug}") }}">
                                <div class="flex flex-col">
                                    <div class="h-48 rounded-lg"
                                        style="background-image: url('storage/{{ $item->image }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">

                                    </div>
                                    <div class="font-bold pt-2">{{ $item->title }}</div>
                                    <div class="opacity-50 text-xs">
                                        {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y, H:i') }}
                                    </div>
                                    <div class="py-2">{{ getShortDescription($item->content, 20) }}
                                    </div>
                                </div>
                            </a>
                        </div>
    
                    @empty
                        <div class="flex justify-center">
                            <h1 class="text-2xl font-bold mt-14">"{{ $search }}" search not found</h1>
                        </div>
                    @endforelse
                </div>
            </div>
            @endisset

            <!-- FOOTER -->
            @include('components.footer')

        </div>
        @include('components.navbar-side')

    </div>

    <script src="/vendor/aos/aos.js"></script>

    <script>
        AOS.init();
    </script>
@endsection
