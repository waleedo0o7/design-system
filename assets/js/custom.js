$(document).ready(function () {
    // Check localStorage for theme on page load
    if (localStorage.getItem('theme') === 'dark') {
        $('body').addClass('dark');
        $('#toggle-dark-mode i').removeClass('icon-moon').addClass('icon-sun');
    }

    // Toggle dark mode on button click
    $('#toggle-dark-mode').on('click', function(e) {
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
});