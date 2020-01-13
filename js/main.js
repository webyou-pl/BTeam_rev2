jQuery(function ($) {
    // Google Maps setup
    var googlemap = new google.maps.Map(
        document.getElementById('googlemap'),
        {
            center: new google.maps.LatLng(44.5403, -78.5463),
            zoom: 8,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
    );
});


// zmniejszanie nav
const menu = document.getElementById('navbar');
const heightMenu = 10;

document.addEventListener('scroll', function () {
    let yOffset = window.pageYOffset;

    if (yOffset >= heightMenu) {
        menu.classList.add('scroll-nav');
    }

    if (yOffset < heightMenu) {
        menu.classList.remove('scroll-nav');
    }
});
window.onload = function () {
    let yOffset = window.pageYOffset;

    if (yOffset >= heightMenu) {
        menu.classList.add('scroll-nav');
    }

    if (yOffset < heightMenu) {
        menu.classList.remove('scroll-nav');
    }
};
//Main view carusel

// var x = document.querySelectorAll('li');
var x = document.getElementsByClassName('mySlides');
var slideIndex = 0;
// showDivs(slideIndex);

// function plusDivs(n) {
//     showDivs(slideIndex += n);
// }

// function showDivs(n) {
//     var i;
//     if(n>x.length) {slideIndex =1}
//     if(n<1) {slideIndex=x.length};
//     for (i =0; i <x.length; i++) {
//         x[i].style.display = "none";
//     }
//     x[slideIndex-1].style.display ="block";
    
// }

carousel();

function carousel() {
  var i;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 3500); 
}



// cookies
const cookie = document.getElementById('cookies')
const closeCookies = document.getElementById('closeCookies')
closeCookies.addEventListener("click", acceptCookies)
if(showCookie('acceptCookies') !== 'true'){
    cookie.classList.remove('d-none')
}

function acceptCookies() {
    document.cookie = 'acceptCookies=true'
    cookie.classList.add('d-none')
}
function showCookie(name) {
    if (document.cookie !== "") {
        const cookies = document.cookie.split(/; */);

        for (let i=0; i<cookies.length; i++) {
            const cookieName = cookies[i].split("=")[0];
            const cookieVal = cookies[i].split("=")[1];
            if (cookieName === decodeURIComponent(name)) {
                return decodeURIComponent(cookieVal);
            }
        }
    }
}