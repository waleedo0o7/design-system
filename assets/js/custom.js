let allSwipers = {};
let breakpointSm = 576;
let breakpointMd = 768;
let breakpointLg = 992;
let breakpointXl = 1250;
let breakpoint2xl = 1600;

$(document).ready(function () {
    initSwiperSlider();
    initIntroCountdown();
    toggleDarkMode();
});

function initSwiperSlider() {

    $('.swiper-custom:not(.swiper-initialized)').each(function (index, element) {

        let $el = $(element);
        let swiperName = `swiper${index}`;

        let nextButtonId = $el.attr('data-next-button');
        let prevButtonId = $el.attr('data-prev-button');
        let paginationId = $el.attr('data-pagination');
        let paginationType = $el.attr('data-pagination-type') || 'bullets'; // bullets - progressbar 
        let nextButton = nextButtonId ? document.getElementById(nextButtonId) : null;
        let prevButton = prevButtonId ? document.getElementById(prevButtonId) : null;
        let paginationEl = paginationId ? document.getElementById(paginationId) : null;


        let spaceBetween = $el.attr('data-space-between') || 10;

        let perView = $el.attr('data-per-view') || 3;

        let perViewMd = $el.attr('data-per-view-md') || 2;

        let perViewSm = $el.attr('data-per-view-sm') || 1;

        let perViewXs = $el.attr('data-per-view-xs') || 1;




        let options = {
            loop: false,
            slidesPerView: perViewXs,
            spaceBetween: 5,

            navigation: {
                nextEl: nextButton || $el.parent().find('.swiper-button-next')[0],
                prevEl: prevButton || $el.parent().find('.swiper-button-prev')[0],
                clickable: true,
            },

            pagination: {
                el: paginationEl,
                type: paginationType,
                clickable: true,
            },

            breakpoints: {
                [breakpointSm]: {
                    slidesPerView: perViewSm,
                    spaceBetween: 10
                },
                [breakpointMd]: {
                    slidesPerView: perViewMd,
                    spaceBetween: 10
                },
                [breakpointXl]: {
                    slidesPerView: perView,
                    spaceBetween: spaceBetween
                }
            }

        }

        let swiperInstance = new Swiper(element, options);



        // swiperInstance.appendSlide(`<div class="swiper-slide">new new</div>`);

        allSwipers[swiperName] = swiperInstance;
        // console.log(`Initialized ${swiperName}`);




        // console.log(allSwipers)

    });


}

function toggleDarkMode() {
    // Check localStorage for theme on page load
    if (localStorage.getItem('theme') === 'dark') {
        $('body').addClass('dark');
        $('#toggle-dark-mode i').removeClass('icon-moon').addClass('icon-sun');
    }

    // Toggle dark mode on button click
    $('#toggle-dark-mode').on('click', function (e) {
        e.preventDefault();
        $('body').toggleClass('dark');
        var icon = $('#toggle-dark-mode i');
        if ($('body').hasClass('dark')) {
            icon.removeClass('icon-moon').addClass('icon-sun');
            localStorage.setItem('theme', 'dark');
        } else {
            icon.removeClass('icon-sun').addClass('icon-moon');
            localStorage.setItem('theme', 'light');
        }
    });
}

function initIntroCountdown() {
    let countDownDate = new Date();
    countDownDate.setDate(countDownDate.getDate() + 70);

    let x = setInterval(function () {

        let now = new Date().getTime();
        let distance = countDownDate - now;

        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days").innerHTML = String(days).padStart(2, '0');
        document.getElementById("hours").innerHTML = String(hours).padStart(2, '0');
        document.getElementById("minutes").innerHTML = String(minutes).padStart(2, '0');
        document.getElementById("seconds").innerHTML = String(seconds).padStart(2, '0');

    }, 1000);

}