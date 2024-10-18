<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoodUp</title>
    @vite('resources/css/app.css')
    <style>
        .option {
            transition: background-color 0.3s ease;
        }

        .option:hover {
            background-color: #ebebeb;
            /* Color on hover */
        }

        .option:active {
            background-color: #D3D3D3;
            /* Color on hover */
        }

        .selected {
            background-color: #D3D3D3;
            /* Light gray color */
        }

        .selected.bg-gray-200 {
            background-color: #E5E7EB;
            /* Gray-200 color */
        }

        .option.active\:bg-yellow-300 {
            background-color: #d6d6d6;
            /* Tailwind's yellow-300 */
        }
    </style>
</head>

<body>
    <section id="hero">
        <div class="flex flex-col md:flex-row h-screen">
            <div class="md:w-4/6 md:px-12 px-4 order-2 md:order-1 flex flex-col h-screen">
                <div class="md:flex-col md:flex-grow md:flex md:justify-center">
                    <img src="assets/moodup-logo-color.png" class="w-40 flex hidden start md:block" alt="">
                    <div class="mt-4">
                        <div class="flex justify-center h-5 w-2/5 mx-auto md:mx-0 md:ml-14">
                            <div id="indicator1" class="bg-gray-400 h-full flex-grow mx-1 rounded-full"></div>
                            <div id="indicator2" class="bg-gray-400 h-full flex-grow mx-1 rounded-full"></div>
                            <div id="indicator3" class="bg-gray-400 h-full flex-grow mx-1 rounded-full"></div>
                            <div id="indicator4" class="bg-gray-400 h-full flex-grow mx-1 rounded-full"></div>
                            <div id="indicator5" class="bg-gray-400 h-full flex-grow mx-1 rounded-full"></div>
                        </div>
                        <h1 id="questionText"
                            class="mt-4 text-center font-bold md:text-start md:ml-20 text-slate-700 md:text-md xl:text-2xl 2xl:text-4xl xl:mt-4">
                        </h1>
                    </div>
                    <div id="optionsContainer"
                        class="mx-auto xl:m-12 bg-slate-300 rounded-3xl flex flex-wrap justify-center py-4 mt-4 items-end md:px-4 lg:px-18">
                        <!-- Options will be generated here -->
                    </div>

                    <div
                        class="flex flex-grow md:flex-grow-0 justify-center items-center xl:justify-start xl:ml-10 md:mt-4 md:px-6 py-5">
                        <div class="w-40 xl:grow-0 border-gray-300 border rounded-full py-4 px-2 text-center xl:px-4 xl:py-2 bg-white font-bold text-sm xl:text-xl mr-2 cursor-pointer"
                            onclick="backQuestion()">Kembali</div>
                        <div id="selanjutnya"
                            class="grow xl:grow-0 border rounded-full py-4 px-14 xl:px-8 xl:py-2 bg-yellow-300 text-center text-sm font-bold xl:text-xl ml-2 cursor-pointer hover:bg-yellow-500"
                            onclick="nextQuestion()">Selanjutnya</div>
                    </div>
                </div>
            </div>
            <div class="md:flex-auto order-1 md:order-2 px-14 md:items-center md:flex">
                <div class="bg-cover bg-center w-72 rounded-3xl h-60 md:h-1/2 mx-auto flex my-4 xl:h-4/5"
                    style="background-image: url('./assets/main/adudu.jpg');">
                </div>
            </div>

            <img src="assets/moodup-logo-color.png" class="w-40 flex mx-auto md:hidden mt-2" alt="">
        </div>
    </section>

    <script>
        const quizData = [{
                question: "Apakah dalam sebulan belakangan ini Anda sering menderita sakit kepala?",
                options: [{
                        text: "Tidak",
                        image: "no.png"
                    },
                    {
                        text: "Ya",
                        image: "yes.png"
                    }
                ],
                img: "Rectangle 2 (1).png"
            },
            {
                question: "Apakah dalam sebulan belakangan ini nafsu makan Anda turun?",
                options: [{
                        text: "Tidak",
                        image: "no.png"
                    },
                    {
                        text: "Ya",
                        image: "yes.png"
                    }
                ],
                img: "Rectangle 2 (2).png"
            },
            {
                question: " Apakah dalam sebulan belakangan ini Anda sulit tidur?",
                options: [{
                        text: "Tidak",
                        image: "no.png"
                    },
                    {
                        text: "Ya",
                        image: "yes.png"
                    }
                ],
                img: "Rectangle 2 (3).png"
            },
            {
                question: "Apakah dalam sebulan belakangan ini Anda sering ketakutan?",
                options: [{
                        text: "Tidak",
                        image: "no.png"
                    },
                    {
                        text: "Ya",
                        image: "yes.png"
                    }
                ],
                img: "Rectangle 2 (4).png"
            },
            {
                question: "Apakah dalam sebulan belakangan ini Anda merasa gugup tegang atau khawatir?",
                options: [{
                        text: "Tidak",
                        image: "no.png"
                    },
                    {
                        text: "Ya",
                        image: "yes.png"
                    }
                ],
                img: "Rectangle 2 (5).png"
            },
            {
                question: "Apakah dalam sebulan belakangan ini tangan Anda sering gemetar?",
                options: [{
                        text: "Tidak",
                        image: "no.png"
                    },
                    {
                        text: "Ya",
                        image: "yes.png"
                    }
                ],
                img: "Rectangle 2 (7).png"
            },
            {
                question: "Apakah dalam sebulan belakangan ini pencernaan Anda terganggu?",
                options: [{
                        text: "Tidak",
                        image: "no.png"
                    },
                    {
                        text: "Ya",
                        image: "yes.png"
                    }
                ],
                img: "Rectangle 2 (8).png"
            },
            {
                question: "Apakah dalam sebulan belakangan ini Anda sulit berpikir jernih?",
                options: [{
                        text: "Tidak",
                        image: "no.png"
                    },
                    {
                        text: "Ya",
                        image: "yes.png"
                    }
                ],
                img: "Rectangle 2 (9).png"
            },
            {
                question: "Apakah dalam sebulan belakangan ini Anda merasa tidak bahagia?",
                options: [{
                        text: "Tidak",
                        image: "no.png"
                    },
                    {
                        text: "Ya",
                        image: "yes.png"
                    }
                ],
                img: "Rectangle 2 (10).png"
            },
            {
                question: "Apakah dalam sebulan belakangan ini Anda menjadi sering menangis?",
                options: [{
                        text: "Tidak",
                        image: "no.png"
                    },
                    {
                        text: "Ya",
                        image: "yes.png"
                    }
                ],
                img: "Rectangle 2 (11).png"
            },
            {
                question: "Apakah dalam sebulan belakangan iniAnda sulit mengambil keputusan?",
                options: [{
                        text: "Tidak",
                        image: "no.png"
                    },
                    {
                        text: "Ya",
                        image: "yes.png"
                    }
                ],
                img: "Rectangle 2 (13).png"
            },
            {
                question: "Apakah dalam sebulan belakangan ini pekerjaan rutin Anda terganggu?",
                options: [{
                        text: "Tidak",
                        image: "no.png"
                    },
                    {
                        text: "Ya",
                        image: "yes.png"
                    }
                ],
                img: "Rectangle 2 (14).png"
            },
            {
                question: "Apakah dalam sebulan belakangan ini Anda kurang menikmati kegiatan  Anda sehari-hari?",
                options: [{
                        text: "Tidak",
                        image: "no.png"
                    },
                    {
                        text: "Ya",
                        image: "yes.png"
                    }
                ],
                img: "Rectangle 2 (15).png"
            },
            {
                question: "Apakah dalam sebulan belakangan ini Anda tidak mampu melakukan  hal-hal yang bermanfaat?",
                options: [{
                        text: "Tidak",
                        image: "no.png"
                    },
                    {
                        text: "Ya",
                        image: "yes.png"
                    }
                ],
                img: "Rectangle 2 (16).png"
            },
            {
                question: "Apakah dalam sebulan belakangan ini Anda merasa diri Anda tidak berharga?",
                options: [{
                        text: "Tidak",
                        image: "no.png"
                    },
                    {
                        text: "Ya",
                        image: "yes.png"
                    }
                ],
                img: "Rectangle 2 (17).png"
            },
        ];

        const iceBreakingData = [{
                question: "Jika kamu bisa menjadi hewan apa pun, hewan apa yang akan kamu pilih?",
                options: [{
                        text: "Kucing, karena bisa tidur sepanjang hari",
                        image: "cat.png"
                    },
                    {
                        text: "Burung, supaya bisa terbang ke mana saja",
                        image: "bird.png"
                    },
                    {
                        text: "Anjing, agar selalu dikelilingi teman-teman",
                        image: "dog.png"
                    },
                    {
                        text: "Jerapah, supaya bisa melihat Monas",
                        image: "girafe.png"
                    }
                ],
                img: "Rectangle 2 (6).png"
            },
            {
                question: "Jika kamu terjebak di pulau terpencil dan hanya bisa membawa satu benda, benda apa yang akan kamu bawa?",
                options: [{
                        text: "Bantal, Untuk tidur nyaman",
                        image: "bantal.png"
                    },
                    {
                        text: "Baju, Agar Tidak Bau",
                        image: "baju.png"
                    },
                    {
                        text: "Do’a, Agar Selamat",
                        image: "pray.png"
                    },
                    {
                        text: "Temen, Agar tidak Kesepian",
                        image: "2 person.png"
                    }
                ],
                img: "Rectangle 2 (12).png"
            },
            {
                question: "Jika kamu bisa memiliki kekuatan super selama sehari, kekuatan apa yang akan kamu pilih?",
                options: [{
                        text: "Teleportasi, Supaya bisa hemat gak naik angktot",
                        image: "doll.png"
                    },
                    {
                        text: "Terbang, Untuk Balapan sama Burung",
                        image: "bird anim.png"
                    },
                    {
                        text: "Pengendali Air, Agar bisa jadi Bombe",
                        image: "wave.png"
                    },
                    {
                        text: "Kuat, Agar Jadi kuli Bangunan",
                        image: "strong.png"
                    }
                ],
                img: "Rectangle 2 (18).png"
            },
        ];

        let currentQuiz = 0;
        let currentSet = 0; // 0 untuk quizData, 1 untuk iceBreakingData
        let currentIceBreaking = 0; // Menyimpan indeks ice-breaking saat ini
        let optionSelected = false;

        function selectOption(index) {
            optionSelected = true;
            const options = document.querySelectorAll('.option');
            options.forEach((option, i) => {
                option.classList.remove('bg-[#D3D3D3]', 'active:bg-yellow-300'); // Remove existing classes
                if (i === index) {
                    option.classList.add('bg-[#D3D3D3]');
                    if (currentSet === 1) { // Check if it's ice-breaking
                        option.classList.add('active:bg-yellow-300'); // Add active class for ice-breaking
                    }
                }
            });
        }


        function displayQuestion() {
            const questionText = document.getElementById("questionText");
            const optionsContainer = document.getElementById("optionsContainer");
            const indicators = [
                document.getElementById('indicator1'),
                document.getElementById('indicator2'),
                document.getElementById('indicator3'),
                document.getElementById('indicator4'),
                document.getElementById('indicator5')
            ];

            const indicatorContainer = document.querySelector('.flex.h-5');
            let currentData = currentSet === 0 ? quizData : iceBreakingData;

            // Set background image based on the current question
            const backgroundDiv = document.querySelector('.bg-cover');
            backgroundDiv.style.backgroundImage =
                `url('./assets/main/quiz/${currentData[currentSet === 0 ? currentQuiz : currentIceBreaking].img}')`;

            // Clear previous options
            optionsContainer.innerHTML = "";

            if (currentSet === 0) {
                // Display indicators for quiz
                indicatorContainer.classList.remove('hidden');
                indicators.forEach(indicator => {
                    indicator.classList.remove('bg-yellow-300');
                    indicator.classList.add('bg-gray-400');
                });
                indicators[currentQuiz % 5].classList.add('bg-yellow-300');

                questionText.textContent = currentData[currentQuiz].question;
                currentData[currentQuiz].options.forEach((option, index) => {
                    const optionDiv = document.createElement('div');
                    optionDiv.className =
                        "bg-white rounded-3xl mx-4 flex flex-col items-center w-40 xl:h-80 pt-4 my-1 xl:justify-end xl:mx-6 xl:w-56 option cursor-pointer";
                    optionDiv.onclick = () => selectOption(index);
                    const bgColor = option.text === "Tidak" ? "bg-red-400" : "bg-[#4FBFC3]";
                    optionDiv.innerHTML = `
                <img src="assets/main/quiz/${option.image}" alt="" class="w-20 mb-2 xl:w-52 xl:mb-8 h-full">
                <div class="rounded-b-3xl py-2 w-full text-center ${bgColor}">
                    <h1 class="font-semibold text-slate-700 md:text-md text-white">${option.text}</h1> 
                </div>`;
                    optionsContainer.appendChild(optionDiv);
                });
            } else if (currentSet === 1) { // Ice-breaking
                // Hide indicators for ice-breaking
                indicatorContainer.classList.add('hidden');
                questionText.textContent = currentData[currentIceBreaking].question;

                currentData[currentIceBreaking].options.forEach((option, index) => {
                    const optionDiv = document.createElement('div');
                    optionDiv.className =
                        "rounded-3xl mx-4 flex flex-col items-center w-40 xl:h-80 pt-4 my-1 xl:justify-end xl:mx-2 xl:w-40 option cursor-pointer";
                    optionDiv.onclick = () => selectOption(index);
                    const bgColors = ["bg-red-500", "bg-[#234970]", "bg-[#FBA83C]", "bg-[#73F17C]"];
                    optionDiv.classList.add(bgColors[index] || "bg-gray-400");

                    optionDiv.innerHTML = `
                <img src="assets/main/quiz/${option.image}" alt="" class="w-20 mb-2 xl:w-52 xl:mb-8 mx-4">
                <div class="rounded-b-3xl py-2 w-full text-center ${bgColors[index]}">
                    <h1 class="font-semibold text-white md:text-md">${option.text}</h1>
                </div>`;

                    optionsContainer.appendChild(optionDiv);
                });
            }
        }


        function nextQuestion() {
            if (!optionSelected) {
                alert("Silakan pilih jawaban untuk melanjutkan.");
                return; // Hentikan eksekusi jika belum memilih
            }

            if (currentSet === 0) { // Jika saat ini di kuis
                currentQuiz++;
                if (currentQuiz >= quizData.length) { // Cek jika sudah selesai semua kuis
                    alert("Kuis selesai!"); // Notifikasi selesai
                    window.location.href = '{{ route('after-quiz') }}';
                    return; // Hentikan eksekusi
                }

                if (currentQuiz % 5 === 0 && currentQuiz > 0) { // Jika kelipatan 5
                    currentSet = 1; // Beralih ke ice-breaking
                    currentIceBreaking = Math.floor(currentQuiz / 5) - 1; // Ambil indeks ice-breaking yang sesuai
                }
            } else if (currentSet === 1) { // Jika saat ini di ice-breaking
                currentSet = 0; // Kembali ke kuis
                // currentQuiz++; // Maju ke kuis berikutnya
                currentIceBreaking++; // Maju ke ice-breaking berikutnya
                if (currentIceBreaking >= iceBreakingData.length) { // Cek jika sudah selesai semua ice-breaking
                    currentIceBreaking = 0; // Reset untuk ice-breaking berikutnya
                }
            }

            displayQuestion();
            optionSelected = false; // Reset pilihan untuk pertanyaan berikutnya
        }

        function backQuestion() {
            if (currentQuiz === 0) {
                alert("Silakan lanjutkan quiz terlebih dahulu.");
                return; // Hentikan eksekusi jika belum memilih
            }
            if (currentSet === 0) { // If currently in the quiz
                if (currentQuiz > 0) {
                    currentQuiz--; // Decrement quiz index
                }
            } else if (currentSet === 1) { // If currently in ice-breaking
                currentIceBreaking--; // Go back to the previous ice-breaking question
                if (currentIceBreaking < 0) {
                    currentIceBreaking = 0; // Prevent going below 0
                    currentSet = 0; // Switch back to quiz
                    currentQuiz--; // Decrement quiz index
                }
            }

            // Ensure we don't go below the first question
            if (currentQuiz < 0) {
                currentQuiz = 0;
            }

            displayQuestion(); // Refresh the displayed question
        }

        // Tampilkan pertanyaan awal
        displayQuestion();
    </script>
</body>

</html>
