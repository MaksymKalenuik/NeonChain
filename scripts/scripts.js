new WOW().init();

$(document).ready(function () {
    $(".owl-banner").owlCarousel({
        items: 1,
        loop: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000,
        nav: false,

    });
    $(document).ready(function () {
        $(".carousel-shop").owlCarousel({
            items: 4,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            nav: false,
            dots: false,
            autoplayHoverPause: true,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 },
                1200: { items: 4 },
            },

        });
    });
    $('#toggle-sidebar').click(function () {
        $('#sidebar').toggleClass('active');
    });
}); 
document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll(".counter");

    counters.forEach((counter) => {
        const target = +counter.getAttribute("data-target");
        let count = 0;
        const duration = 2000; // Загальний час анімації в мілісекундах
        const stepTime = Math.max(10, Math.floor(duration / (target / 10))); // Час між оновленнями
        const increment = Math.ceil(target / (duration / stepTime)); // Розрахунок кроку для швидшої анімації

        const updateCounter = () => {
            count += increment;

            if (count < target) {
                counter.innerText = count.toLocaleString(); // Формат числа з комами
                setTimeout(updateCounter, stepTime);
            } else {
                counter.innerText = target.toLocaleString(); // Останнє число точно цільове
            }
        };

        updateCounter();
    });
});
document.querySelector('a[href="#about-us"]').addEventListener('click', function (e) {
    e.preventDefault(); // Зупиняє стандартну поведінку посилання
    document.querySelector('#about-us').scrollIntoView({
        behavior: 'smooth', // Плавна прокрутка
        block: 'start'      // Прокрутка до початку секції
    });
});


