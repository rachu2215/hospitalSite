// Smooth scrolling
$('nav a').on('click', function(e) {
    if (this.hash !== '') {
        e.preventDefault();

        const hash = this.hash;

        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800);
    }
});

// Form submission
$('form').on('submit', function(e) {
    e.preventDefault();

    // Perform form validation and submission here
});