// Navbar Fixed
window.onscroll = function() {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if(window.pageYOffset > fixedNav) {
        header.classList.add('navbar-fixed')
    } else {
        header.classList.remove('navbar-fixed')
    }
}


// Hamburger
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});

new PureCounter();

// Card Carousel
let sliderContainer = document.getElementById('sliderContainer');
let slider = document.getElementById('slider');
let cards = slider.getElementsByTagName('li');

let elementsToShow = 3;

if (document.body.clientWidth < 900) {
    elementsToShow =1;
} else if (document.body.clientWidth < 1300) {
    elementsToShow = 2;
}

let sliderContainerWidth = sliderContainer.clientWidth;

let cardWidth = sliderContainerWidth/elementsToShow;

slider.style.width = cards.length*cardWidth+'px';
slider.style.transition = 'margin';
slider.style.transitionDuration = '1s';


for (let index = 0; index < cards.length; index++) {
    const element = cards[index];
    element.style.width = cardWidth+'px';
}

function prev() {
    if (+slider.style.marginLeft.slice(0,-2) != -cardWidth*(cards.length-elementsToShow))
        slider.style.marginLeft = ((+slider.style.marginLeft.slice(0,-2))-cardWidth)+'px';
}

function next() {
    if  (+slider.style.marginLeft.slice(0,-2) != 0)
        slider.style.marginLeft = ((+slider.style.marginLeft.slice(0,-2))+cardWidth)+'px';
}
