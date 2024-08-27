@extends('components.main')
@section('link')
    <link rel="stylesheet" href="{{ asset('src/carousel.css') }}">
    <style>
      .custom-heading h1 {
          font-size: 2rem;
          font-weight: bold;
          color: #333;
      }
      .custom-heading h2 {
          font-size: 1.5rem;
          font-weight: bold;
          color: #333;
      }
  </style>
@endsection
@section('container')
    <div class="drawer">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col">
            <!-- Navbar -->
            @include('components.navbar')
            <!-- Page content here -->
            
            <div class="container mx-auto mt-24 flex">
                <div class="mx-5 lg:mx-0 lg:w-3/4">
                  <div class="h-96 rounded-xl"
                    style="background-image: url('/storage/{{ $news->image }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                  </div>
                  <h1 class="text-3xl font-bold py-5">{{ $news->title }}</h1>
                  <div class="flex mb-5 gap-2">
                    <p class="text-gray-500">{{ \Carbon\Carbon::parse($news->created_at)->translatedFormat('d F Y, H:i') }}</p>
                    <div class="w-0.5 bg-gray-400"></div>
                    <p class="">{{ $news->author }}</p>
                    <div class="w-0.5 bg-gray-400"></div>
                    <p class="">{{ $news->newsCategory->name }}</p>
                  </div>
                  <div class="text-justify custom-heading">
                    {!! $news->content !!}
                  </div>
                </div>
        
                <div class="hidden lg:w-1/4 ml-6 lg:flex flex-col gap-5">
                  <h2 class="font-bold">News Recomendation</h2>
                  @forelse ($top_3_news as $top_news)
                    <a href="{{ url("news/{$top_news->slug}") }}">
                      <div class="h-48 relative text-xl text-white text-right"
                        style="background-image: url('/storage/{{ $top_news->image }}'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                        <div
                          class="transition duration-300 h-full bg-gradient-to-b from-transparent to-black hover:opacity-50">
                          <div class="absolute bottom-5 right-5 ">
                            {{ $top_news->title }}
                          </div>
                        </div>
                      </div>
                    </a>
                      
                  @empty
                      <p>No latest news</p>
                  @endforelse
                  
                </div>
              </div>

            
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
