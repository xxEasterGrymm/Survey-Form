/*for smooth scroll*/
$(document).ready(function() {
    var scrollLink = $('.scroll');
    scrollLink.click(function(e) {
        e.preventDefault();
        $('body,html').animate({ scrollTop: $(this.hash).offset().top }, 1000);
    });
});

$(window).scroll(function() {
    $("#text").css("opacity", 1 - $(window).scrollTop() / 250);
});

let text = document.getElementById('text');

window.addEventListener('scroll', function() {
    let value = window.scrollY;
    text.style.top = 50 + value * -0.25 + '%';
});