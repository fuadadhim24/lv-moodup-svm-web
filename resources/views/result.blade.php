<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoodUp</title>
    @vite('resources/css/app.css')
    <style type="text/tailwindcss">
        @layer utilities {
            body {
                background-color: #FFFFFF;
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
                <a href="http://wa.me/6287840199095" target="_blank" rel="noopener noreferrer"><button
                        class='px-4 py-2 text-sm rounded-full font-bold text-black border-2 border-white bg-white transition-all ease-in-out duration-300 hover:bg-transparent hover:text-white'>Hubungi
                        Kami</button></a>
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
    <section id="hero"
        class="sm:w-full sm:items-start bg-white flex flex-col items-center justify-center h-screen sm:pt-32 md:pt-32 lg:pt-0 pt-80">
        <div class="flex w-full mt-28 mx-auto items-center justify-center">
            <h1 class="flex-1 text-center sm:text-start sm:ml-14 font-bold text-lg">Hasil Tes Kesehatan Mental</h1>
            <a href="{{ route('tips') }}"
                class="mr-10 xl:grow-0 md:mr-10 border rounded-full py-2 px-8 xl:px-8 xl:py-2 bg-yellow-300 text-center text-sm font-bold xl:text-xl ml-2 cursor-pointer">
                <div class="">Tips</div>
            </a>
        </div>
        <div class="sm:flex px-8 w-full pb-14">
            <div class="xl:flex-grow bg-white sm:w-3/5 xl:py-14 mt-4 rounded-xl shadow-2xl grid grid-cols-1 gap-4 mx-2">
                <div
                    class="sm:h-full py-4 px-2 sm:my-auto sm:flex mx-auto flex-col sm:justify-center sm:items-center relative">
                    <img src="assets/main/result/Stres Sedang 1.png" alt="" class="flex mx-auto">
                    <div
                        class="absolute mt-20 sm:mt-24 xl:mt-64 lg:mt-52 md:mt-48 left-1/2 transform -translate-x-1/2 w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[20px] border-b-black">
                    </div>
                    <div>
                        <p class="text-md text-center text-slate-800">Tingkat Stres kamu</p>
                        <h2 class="mt-2 text-lg font-bold text-center text-slate-800">Sedang</h2>

                        <div
                            class="mt-4 bg-gradient-to-r from-green-500 via-yellow-300 via-orange-300 to-red-500 mx-20 h-4 rounded-full">
                        </div>
                        <p class="text-center mt-6 text-slate-600 text-sm mx-6">Skor stres kamu adalah 8 dari 15. Skor
                            ini
                            menunjukkan kamu berada pada tingkat
                            stres sedang.35% orang yang mengikuti
                            tes ini juga memiliki tingkat stres sedang.</p>
                    </div>
                </div>
            </div>

            <div class="xl:flex-grow bg-white w-full xl:py-14 mt-4 rounded-xl shadow-2xl grid grid-cols-1 gap-4 mx-2">
                <div
                    class="sm:h-full py-4 px-2 sm:my-auto sm:flex mx-auto flex-col sm:justify-center sm:items-center relative">
                    <img src="assets/main/result/consult.png" alt="" class="flex mx-auto">
                    <div>
                        <h2 class="mt-4 text-lg font-bold text-center text-slate-800">Saran dan Tindak Lanjut</h2>

                        <ul class="list-disc list-inside text-justify mt-2 text-slate-600 text-sm mx-6">
                            <li>Stres kamu berada di tingkat sedang. Mulai terapkan kebiasaan sehat untuk mengelola
                                stres.</li>
                            <li>Lakukan aktivitas yang menenangkan seperti mendengarkan musik, menulis jurnal, atau
                                jalan santai setiap hari.</li>
                            <li>Hindari multitasking, fokus pada satu hal dalam satu waktu untuk mengurangi tekanan
                                mental.</li>
                            <li>Cobalah teknik pernapasan dalam atau meditasi minimal 10 menit per hari.</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
</body>

</html>
