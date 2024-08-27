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

          <div class="container mx-auto mt-28">
            
            @php
                $counter = 0;
            @endphp

            @foreach ($rankGroups as $rank)
                <div class="flex justify-center gap-4 flex-wrap">
                    @foreach ($rank as $people)
                    <a href="{{ url("people/{$people->id}") }}">
                        <div class="card items-center bg-base-100 shadow-xl" data-aos="zoom-in" data-aos-delay="{{100 * $counter}}">                            
                            <div class="h-40 w-40 overflow-hidden rounded-full">
                                <img src="{{ $people->picture != "" ? "storage/" . $people->picture : "assets/profile.png" }}" alt="">
                            </div>
                            <div class="card-body">
                                <h2 class="card-title">{{ $people->name }}</h2>
                                <p>{{ $people->position }}</p>
                            </div>
                        </div>

                        @php
                            $counter++;
                        @endphp
                    </a>
                    @endforeach
                </div>
                <div class="divider"></div>
            @endforeach
            
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
