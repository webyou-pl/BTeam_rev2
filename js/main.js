
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

var x = document.getElementsByClassName('mySlides');
var slideIndex = 0;


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






////// Navigation

$(document).ready(function(){
    // Add smooth scrolling to all links
    $(".nav-link").on('click', function(event) {
  
      // Make sure this.hash has a value before overriding default behavior
      if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();
  
        // Store hash
        var hash = this.hash;
  
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
  
          // Add hash (#) to URL when done scrolling (default click behavior)
          window.location.hash = hash;
        });
      } // End if
    });



  });

  $(document).ready(function(){
  $('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});
});