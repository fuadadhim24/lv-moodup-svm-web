<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>MoodUp</title>
    <style type="text/tailwindcss">
        @layer utilities {
            body {
                background-color: #FDC7BC;
            }
        }

        /* *{
        border: 1px solid red;
    } */
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggleOpen = document.getElementById('toggleOpen');
            const toggleClose = document.getElementById('toggleClose');
            const collapseMenu = document.getElementById('collapseMenu');

            // Function to open the menu
            toggleOpen.addEventListener('click', () => {
                collapseMenu.classList.remove('hidden');
            });

            // Function to close the menu
            toggleClose.addEventListener('click', () => {
                collapseMenu.classList.add('hidden');
            });
        });
    </script>
</head>

<body>
    <header
        class='z-40 header flex shadow-md py-4 px-4 sm:px-10 bg-yellow-300 font-[sans-serif] min-h-[70px] tracking-wide fixed top-0 w-full'
        style="border-bottom-left-radius: 24px; border-bottom-right-radius: 24px;">
        <div class='flex flex-wrap items-center justify-between gap-5 w-full'>
            <a href="javascript:void(0)"><img src="assets/moodup-logo.png" alt="logo" class='w-36' />
            </a>

            <div id="collapseMenu"
                class='hidden lg:!block max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-50 max-lg:before:inset-0 max-lg:before:z-50'>
                <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
                        <path
                            d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                            data-original="#000000"></path>
                        <path
                            d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                            data-original="#000000"></path>
                    </svg>
                </button>

                <ul
                    class='lg:flex gap-x-5 max-lg:space-y-3 max-lg:fixed max-lg:bg-white max-lg:w-1/2 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:p-6 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
                    <li class='mb-6 hidden max-lg:block'>
                        <a href="javascript:void(0)"><img src="assets/moodup-logo-color.png" alt="logo"
                                class='w-36' />
                        </a>
                    </li>
                    <li class='max-lg:border-b border-gray-300 max-lg:py-3 px-3'>
                        <a href='{{ route('welcome') }}'
                            class='hover:text-black text-gray-600 block font-semibold text-[15px]'>Beranda</a>
                    </li>
                    <li class='max-lg:border-b border-gray-600 max-lg:py-3 px-3'><a href='{{ route('about') }}'
                            class='hover:text-black text-gray-600 block font-semibold text-[15px]'>Tentang Kami</a>
                    </li>
                    <li class='max-lg:border-b border-gray-600 max-lg:py-3 px-3'><a href='{{ route('pre-quiz') }}'
                            class='hover:text-black text-gray-600 block font-semibold text-[15px]'>Quiz</a>
                    </li>
                </ul>
            </div>
            <div class='flex max-lg:ml-auto space-x-3'>
                <button
                    class='px-4 py-2 text-sm rounded-full font-bold text-black border-2 border-white bg-white transition-all ease-in-out duration-300 hover:bg-transparent hover:text-white'><a
                        href="http://wa.me/6287840199095" target="_blank" rel="noopener noreferrer">Hubungi
                        Kami</a></button>
                <button id="toggleOpen" class='lg:hidden'>
                    <svg class="w-7 h-7" fill="#000" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>
    <section id="hero" class="bg-[#F99886] h-screen flex mx-auto"
        style="background-image: url('assets/bg-hero.png'); background-size: cover; background-repeat: no-repeat;">
        <div class="grid md:grid-cols-2 md:px-10 items-center md:gap-8 max-w-6xl space-x-3 mt-24 mx-auto">
            <div class="max-md:order-1 max-md:text-center mx-3">
                <h2 class="text-gray-800 md:text-5xl text-3xl font-extrabold mb-4 md:!leading-[55px] text-white">Temukan
                    Tingkat Stres Anda dengan Tes <span class="text-yellow-200"> Sederhana</span></h2>
                <p class="mt-4 text-base text-gray-600 leading-relaxed">Cek kesehatan mental Anda dengan menjawab 15
                    pertanyaan sederhana yang dikembangkan oleh WHO.</p>
                <div class="mt-8">
                    <a href="{{ route('pre-quiz') }}"><button type='button'
                            class="bg-yellow-300 hover:bg-transparent hover:text-black border-2 border-yellow-300 transition-all text-black font-semibold tracking-wide text-sm rounded-full px-6 py-2.5">Mulai
                            Sekarang</button></a>
                </div>
                <hr class="mt-8 border-gray-300" />
                <div class="mt-8">
                    <h4 class="text-gray-800 font-bold text-base mb-4">Dipercaya instansi terbaik di Indonesia</h4>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 items-center">
                        <img src="https://readymadeui.com/google-logo.svg" class="w-28 mx-auto" alt="google-logo" />
                        <img src="https://readymadeui.com/facebook-logo.svg" class="w-28 mx-auto" alt="facebook-logo" />
                        <img src="https://readymadeui.com/linkedin-logo.svg" class="w-28 mx-auto" alt="linkedin-logo" />
                        <img src="https://readymadeui.com/pinterest-logo.svg" class="w-28 mx-auto"
                            alt="pinterest-logo" />
                    </div>
                </div>
            </div>
            <div class="flex justify-center lg:h-[650px] md:h-[550px] relative z-20">
                <img src="assets/hero-as1.png"
                    class="rounded-md lg:w-full md:w-full object-contain sm:w-11/12 z-50 w-4/5"
                    alt="Dining Experience" />
            </div>
        </div>
    </section>

    <section id="content" class="bg-[#F99886] pt-24 h-screen"
        style="background-image: url('assets/bg-content.png'); background-size: cover; background-repeat: no-repeat;">
        <div class="font-sans px-4 py-12">
            <div class="md:grid md:grid-cols-3 gap-12 md:max-w-screen-lg max-w-6xl mx-auto">
                <div class="col-span-1 flex justify-center w-4/5 mx-auto mb-12 lg:mb-0">
                    <img src="assets/content-as1.png" alt="Placeholder Image"
                        class="rounded-lg object-contain w-full h-full" />
                </div>
                <div class="col-span-2 grid grid-cols-1 gap-4">
                    <div class="text-left">
                        <h2
                            class="text-gray-800 md:text-5xl text-3xl font-extrabold mb-4 md:!leading-[55px] text-white">
                            Apa itu Kesehatan <span class="text-yellow-200">Mental?</span></h2>
                        <p class="mb-4 text-sm text-white">Kesehatan mental mengacu pada kesejahteraan emosional,
                            psikologis, dan sosial seseorang. Kesehatan mental memengaruhi cara kita berpikir, merasa,
                            dan bertindak dalam kehidupan sehari-hari. Ini juga menentukan bagaimana kita menangani
                            stres, berhubungan dengan orang lain, dan membuat keputusan penting.</p>
                        <p class="text-sm text-white">Ini juga menentukan bagaimana kita menangani stres, berhubungan
                            dengan orang lain, dan membuat keputusan penting.</p>
                    </div>
                    <div class="text-left">
                        <h2
                            class="text-gray-800 md:text-5xl text-3xl font-extrabold mb-4 md:!leading-[55px] text-white">
                            Mengapa Kesehatan Mental <span class="text-yellow-200">Penting?</span></h2>
                        <p class="mb-4 text-sm text-white">Kesehatan mental yang baik memungkinkan kita untuk menjalani
                            kehidupan yang lebih bahagia dan produktif.</p>
                        <p class="text-sm text-white">Sebaliknya, kesehatan mental yang buruk dapat menyebabkan stres,
                            kecemasan, depresi, dan masalah kesehatan lainnya yang berhubungan dengan fisik dan emosi.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggleOpen = document.getElementById('toggleOpen');
            const toggleClose = document.getElementById('toggleClose');
            const collapseMenu = document.getElementById('collapseMenu');

            toggleOpen.addEventListener('click', () => {
                collapseMenu.classList.remove('hidden');
            });

            toggleClose.addEventListener('click', () => {
                collapseMenu.classList.add('hidden');
            });
        });
    </script>

</body>

</html>
