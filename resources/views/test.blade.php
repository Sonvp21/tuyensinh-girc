<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider Nâng Cao với Tailwind & DaisyUI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.6.4/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body class="bg-gray-100">
    <div class="relative max-w-5xl mx-auto py-10">
        <!-- Nút điều hướng trái -->
        <a href="#" id="prevBtn"
            class="absolute size-10 left-0 top-1/2 transform -translate-y-1/2 bg-gradient-to-b from-yellow-400 to-orange-500 text-white p-[2px] text-center rounded-full shadow-lg text-2xl z-10 transition-all duration-300">
            <span>❮</span>
        </a>

        <div class="carousel w-full" id="carousel">
            <div class="carousel-item relative w-full" id="slide1">
                <iframe class="w-full h-96 rounded-xl shadow-lg" src="https://www.youtube.com/embed/Ixg0tUsKlkg"
                    allowfullscreen></iframe>
            </div>
            <div class="carousel-item relative w-full" id="slide2">
                <iframe class="w-full h-96 rounded-xl shadow-lg" src="https://www.youtube.com/embed/_tWf95mYxck"
                    allowfullscreen></iframe>
            </div>
            <div class="carousel-item relative w-full" id="slide3">
                <iframe class="w-full h-96 rounded-xl shadow-lg" src="https://www.youtube.com/embed/at4Ve-F0RvM"
                    allowfullscreen></iframe>
            </div>
            <div class="carousel-item relative w-full" id="slide4">
                <iframe class="w-full h-96 rounded-xl shadow-lg" src="https://www.youtube.com/embed/vmsrUKZlhLk"
                    allowfullscreen></iframe>
            </div>
        </div>

        <!-- Nút điều hướng phải -->
        <a href="#" id="nextBtn"
            class="absolute size-10 right-0 top-1/2 transform -translate-y-1/2 bg-gradient-to-b from-yellow-400 to-orange-500 text-white p-[2px] text-center rounded-full shadow-lg text-2xl z-10 transition-all duration-300">
            <span>❯</span>
        </a>
    </div>

    <script>
        let currentIndex = 1;
        const totalSlides = 4;
        let interval;

        function goToSlide(index) {
            currentIndex = index;
            window.location.hash = `#slide${currentIndex}`;
        }

        function nextSlide() {
            currentIndex = (currentIndex % totalSlides) + 1;
            goToSlide(currentIndex);
        }

        function prevSlide() {
            currentIndex = (currentIndex - 2 + totalSlides) % totalSlides + 1;
            goToSlide(currentIndex);
        }

        function startAutoSlide() {
            interval = setInterval(nextSlide, 5000);
        }

        function stopAutoSlide() {
            clearInterval(interval);
        }

        document.getElementById('nextBtn').addEventListener('click', (e) => {
            e.preventDefault();
            nextSlide();
        });

        document.getElementById('prevBtn').addEventListener('click', (e) => {
            e.preventDefault();
            prevSlide();
        });

        document.querySelectorAll('.carousel-item iframe').forEach(iframe => {
            iframe.addEventListener('mouseenter', stopAutoSlide);
            iframe.addEventListener('mouseleave', startAutoSlide);
        });

        startAutoSlide();
    </script>
</body>

</html>
