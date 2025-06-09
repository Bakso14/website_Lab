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

            <!-- HEROOO PERTAMA -->
            <div class="hero min-h-screen" style="background-image: url('/assets/landing-page-picture.png');">
                <div class="hero-overlay bg-opacity-70"></div>
                <div class=" text-left text-neutral-content">
                    <div class="max-w-2xl w-[80vw] text-white">
                        <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                        <p class="mb-5 text-xl" id="landing-description"></p>
                        <button class="btn bg-[#10516F] hover:bg-[#1B82B2] text-white border-none">Join Us</button>
                    </div>
                </div>
            </div>

            <!-- HERO WHAT WE DO -->
            <div class="flex justify-center place-items-center min-h-screen  bg-base-200" id="what-we-do">
                <div class="flex w-[80vw] flex-col lg:flex-row-reverse place-items-center">
                    <img src="https://drive.google.com/file/d/10uVcz08C8OHYixmZkn8Yegon80EJ44U6/preview" class="w-full m-5 rounded-lg shadow-2xl"
                        data-aos="fade-left" data-aos-duration="1000"/>
                    <div class=" p-5" data-aos="fade-right" data-aos-duration="1000">
                        <h1 class="text-5xl font-bold">What We Do</h1>
                        <ul class="py-6 list-disc text-xl">
                            <li class="mb-2"><strong>Programming Microprocessors:</strong> Writing and debugging code for
                                microprocessors.</li>
                            <li class="mb-2"><strong>Microcontroller Projects:</strong> Developing projects using Arduino,
                                PIC, or ARM
                                boards.</li>
                            <li class="mb-2"><strong>System Design and Integration:</strong> Integrating microprocessors
                                with memory,
                                I/O devices, and communication interfaces.</li>
                            <li class="mb-2"><strong>Simulation and Testing:</strong> Using software tools to simulate and
                                test
                                microprocessor operations.</li>

                        </ul>
                        <button class="btn bg-[#10516F] hover:bg-[#1B82B2] text-white border-none">Partner With Us</button>
                    </div>
                </div>
            </div>

            <!-- WHO WE ARE -->
            <div class="hero min-h-screen py-10 px-5 bg-[#002130]" id="who-we-are">
                <div class="flex flex-col place-items-center">
                    <div class="w-full text-left text-white" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <h1 class="text-5xl font-bold my-5">Who We Are</h1>
                        <div class="flex justify-start mt-4">
                            <button id="btn-carousel-1" class="text-blue-400 font-bold"
                                onclick="showSlide(0)">Engineers</button>
                            <button id="btn-carousel-2" class="text-gray-400 ml-6" onclick="showSlide(1)">Lab
                                Assistant</button>
                            <button id="btn-carousel-3" class="text-gray-400 ml-6"
                                onclick="showSlide(2)">Scientists</button>
                        </div>
                    </div>

                    <div class="container mx-auto my-8" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <div class="carousel -z-10">
                            <!-- Carousel Inner -->
                            <div id="carouselInner" class="carousel-inner">
                                <!-- Carousel Items -->
                                <div class="carousel-item">
                                    <div class="rounded-lg shadow-lg m-4 w-1/2"
                                        style="background-image: url('/assets/landing-engineer-1.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                    </div>
                                    <div class="rounded-lg shadow-lg m-4 w-1/2"
                                        style="background-image: url('/assets/landing-engineer-2.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="rounded-lg shadow-lg m-4 w-1/2"
                                        style="background-image: url('/assets/landing-lab-assistant-1.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                    </div>
                                    <div class="rounded-lg shadow-lg m-4 w-1/2"
                                        style="background-image: url('/assets/landing-lab-assistant-2.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="rounded-lg shadow-lg m-4 w-1/2"
                                        style="background-image: url('/assets/landing-scientist-1.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                    </div>
                                    <div class="rounded-lg shadow-lg m-4 w-1/2"
                                        style="background-image: url('/assets/landing-scientist-2.png'); background-position: center; background-repeat: no-repeat; background-size: cover;">
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/400x400/87ceeb" alt="Slide 3">
                                    <img src="https://via.placeholder.com/400x400/87ceeb" alt="Slide 3">
                                </div>
                            </div>
                        </div>
                    </div>


                    <button class="btn hover:bg-[#1B82B2] text-white bg-[#10516F] border-none my-5" data-aos="zoom-in"
                        data-aos-delay="100">Learn More</button>

                </div>
            </div>

            <!-- HERO HOW WE DO IT -->
            <div class="hero min-h-screen bg-base" id="how-we-do-it">
                <div class="flex flex-col place-items-center">
                    <h1 class="text-5xl font-bold my-5" data-aos="fade-up" data-aos-duration="1000">How We Do It</h1>
                    <div class="flex flex-wrap justify-center">
                        <div class="rounded-xl m-2 w-48 bg-base-100 shadow-xl" data-aos="zoom-in" data-aos-delay="100">
                            <div class="card-body items-center">
                                <img src="/assets/landing-planning.svg" alt="">
                                <h2 class="card-title">Planning</h2>
                                <p>Outline objectives and determine required tasks.</p>
                            </div>
                        </div>
                        <div class="rounded-xl m-2 w-48 bg-base-100 shadow-xl" data-aos="zoom-in" data-aos-delay="200">
                            <div class="card-body items-center">
                                <img src="/assets/landing-resource.svg" alt="">
                                <h2 class="card-title">Resource Setup</h2>
                                <p>Ensure availability of necessary hardware, software, and documentation.</p>
                            </div>
                        </div>
                        <div class="rounded-xl m-2 w-48 bg-base-100 shadow-xl" data-aos="zoom-in" data-aos-delay="300">
                            <div class="card-body items-center">
                                <img src="/assets/landing-execution.svg" alt="">
                                <h2 class="card-title">Execution</h2>
                                <p>Conduct programming, experimentation, and analysis as planned.</p>
                            </div>
                        </div>
                        <div class="rounded-xl m-2 w-48 bg-base-100 shadow-xl" data-aos="zoom-in" data-aos-delay="400">
                            <div class="card-body items-center">
                                <img src="/assets/landing-collaboration.svg" alt="">
                                <h2 class="card-title">Collaboration</h2>
                                <p>Work closely together, sharing insights and troubleshooting issues.</p>
                            </div>
                        </div>
                        <div class="rounded-xl m-2 w-48 bg-base-100 shadow-xl" data-aos="zoom-in" data-aos-delay="500">
                            <div class="card-body items-center">
                                <img src="/assets/landing-review.svg" alt="">
                                <h2 class="card-title">Review</h2>
                                <p>Regularly evaluate progress and adjust strategies as needed.</p>
                            </div>
                        </div>
                    </div>
                    <button class="btn hover:bg-[#1B82B2] text-white bg-[#10516F] border-none my-5" data-aos="zoom-in"
                        data-aos-delay="600">Learn More</button>

                </div>
            </div>

            <!-- FOOTER -->
            @include('components.footer')

        </div>
       @include('components.navbar-side')
    </div>



    <script src="/vendor/typed/typed.umd.js"></script>
    <script src="/vendor/aos/aos.js"></script>

    <script>
        var typed = new Typed('#landing-description', {
            strings: [
                'The Microprocessor Laboratory is a facility dedicated to studying the architecture and applications of microprocessors in electronic systems.',
                'Equipped with modern hardware and software,',
                'the lab enables hands-on experiments that bridge theory and practice,',
                'honing technical skills and fostering innovation in microprocessor technology.'
            ],
            typeSpeed: 30,
            loop: true,
            showCursor: false,
            backDelay: 1500,
        });
    </script>

    <script>
        const carouselInner = document.getElementById('carouselInner');
        const slides = document.querySelectorAll('.carousel-item');
        let currentIndex = 0;

        function showSlide(index) {
            const btn1 = document.getElementById('btn-carousel-1');
            const btn2 = document.getElementById('btn-carousel-2');
            const btn3 = document.getElementById('btn-carousel-3');

            if (index == 0) {
                btn2.classList.remove('font-bold');
                btn3.classList.remove('font-bold');
                btn2.classList.remove('text-blue-400');
                btn3.classList.remove('text-blue-400');
                btn2.classList.add('text-gray-400');
                btn3.classList.add('text-gray-400');
                btn1.classList.remove('text-gray-400');
                btn1.classList.add('text-blue-400');
                btn1.classList.add('font-bold');
            } else if (index == 1) {
                btn1.classList.remove('font-bold');
                btn3.classList.remove('font-bold');
                btn1.classList.remove('text-blue-400');
                btn3.classList.remove('text-blue-400');
                btn1.classList.add('text-gray-400');
                btn3.classList.add('text-gray-400');
                btn2.classList.remove('text-gray-400');
                btn2.classList.add('text-blue-400');
                btn2.classList.add('font-bold');
            } else if (index == 2) {
                btn1.classList.remove('font-bold');
                btn2.classList.remove('font-bold');
                btn1.classList.remove('text-blue-400');
                btn2.classList.remove('text-blue-400');
                btn1.classList.add('text-gray-400');
                btn2.classList.add('text-gray-400');
                btn3.classList.remove('text-gray-400');
                btn3.classList.add('text-blue-400');
                btn3.classList.add('font-bold');

            }
            currentIndex = index;
            const offset = -currentIndex * 100;
            carouselInner.style.transform = `translateX(${offset}%)`;
        }

        setInterval(() => {
            const i = currentIndex == 2 ? 0 : currentIndex += 1;
            showSlide(i);
        }, 7000)
    </script>

    <script>
        AOS.init();
    </script>
@endsection
