$(window).scroll(function() {
    $("#text").css("opacity", 1 - $(window).scrollTop() / 250);
});

let text = document.getElementById('text');
let bird1 = document.getElementById('bird1');
let bird2 = document.getElementById('bird2');
let btn = document.getElementById('button');
let rocks = document.getElementById('rocks');
let forest = document.getElementById('forest');
let water = document.getElementById('water');
let header = document.getElementById('header');

window.addEventListener('scroll', function() {
    let value = window.scrollY;

    text.style.top = 50 + value * -0.25 + '%';
    bird1.style.top = value * -1.5 + 'px';
    bird1.style.left = value * 2 + 'px';
    bird2.style.top = value * -1.5 + 'px';
    bird2.style.left = value * -3 + 'px';
    btn.style.marginTop = value + 'px';
    rocks.style.top = vallue * -0.12 + 'px';
    forest.style.top = value * 0.25 + 'px';
    header.style.top = value * 0.5 + 'px';
})