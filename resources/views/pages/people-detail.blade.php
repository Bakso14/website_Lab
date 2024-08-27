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
                <div class="flex flex-col m-5 lg:flex-row gap-5 justify-center">
                    <div class="h-80 w-52" style="background-image: url('{{ $people->picture != "" ? "/storage/" . $people->picture : "/assets/profile.png" }}'); background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
                    <div class="w-0.5 bg-gray-500"></div>
                    <div class="flex flex-col">
                        <h1 class="text-2xl font-bold">{{ $people->name }}</h1>
                        <h3 class="text-lg">{{ $people->position }} | {{ $people->interest }}</h3>
                        <div class="flex gap-4 mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M798-120q-125 0-247-54.5T329-329Q229-429 174.5-551T120-798q0-18 12-30t30-12h162q14 0 25 9.5t13 22.5l26 140q2 16-1 27t-11 19l-97 98q20 37 47.5 71.5T387-386q31 31 65 57.5t72 48.5l94-94q9-9 23.5-13.5T670-390l138 28q14 4 23 14.5t9 23.5v162q0 18-12 30t-30 12ZM241-600l66-66-17-94h-89q5 41 14 81t26 79Zm358 358q39 17 79.5 27t81.5 13v-88l-94-19-67 67ZM241-600Zm358 358Z"/></svg>
                            <div class="text-lg">{{ $people->phone_number }}</div>
                        </div>
                        <div class="flex gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>
                            <div class="text-lg"> {{ $people->email }} </div>
                        </div>
                        <div class="text-2xl mt-4">Achievements</div>
                        <ul class="list-disc list-inside">
                            @forelse ($championships as $championship)
                                <li>{{ $championship->name }}<a href="{{ url("/storage/$championship->source") }}" class="text-blue-500">Source</a></li>
                            @empty
                                <li>Nothing</li>    
                            @endforelse
                        </ul>
                        <div class="text-2xl mt-4">Researchs</div>
                        <ul class="list-disc list-inside">
                            @forelse ($researchs as $research)
                                <li>
                                    {{ $research->name }} 
                                    @if ($research->source != "")
                                        <a href="{{ url("/storage/{$research->source}") }}" target="_blank" class="text-blue-500">Source</a>
                                    @endif
                                </li>
                            @empty
                                <li>Nothing</li>    
                            @endforelse
                        </ul>
                    </div>
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
