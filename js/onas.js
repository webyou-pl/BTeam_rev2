
// === new animation ===
var aboutWe = document.getElementById("oNas")
var aboutWeCards = aboutWe.querySelectorAll("#lukasz, #pawel")

aboutWe.addEventListener('click',function(){
    if(!this.hasAttribute("disabled")){
        aboutWe.setAttribute("disabled", true);
        aboutWeCards.forEach(e => {
            e.classList.toggle("show")
        });
        setTimeout(removeDisabled,1000);
    }
})

function removeDisabled() {
    aboutWe.removeAttribute("disabled");
}

// ==== old animation ===


// O nas animation
// let lukasz = document.getElementById('lukasz');
// let pawel = document.getElementById('pawel');
//===============================
// JS long swap animation
//===============================

// pawel.addEventListener('click',function(){
    
//     pawel.style.animation ="swap3 1500ms forwards 1000ms alternate"
//     lukasz.style.animation ="swap1 1500ms forwards 1000ms alternate"

// })

// lukasz.addEventListener('click',function(){
//     // lukasz.style.zIndex="0"
//     // lukasz.style.filter="blur(6px)"
//     lukasz.style.animation ="swap2 1500ms forwards 1000ms alternate"
//     pawel.style.animation ="swap4 1500ms forwards 1000ms alternate"
//     setTimeout(function(){
//         lukasz.style.zIndex="1"
//     pawel.style.zIndex="0"
//    }, 1000);

// })

//===============================
// JS swap 
//===============================

// pawel.addEventListener('click',function(){
    
//     pawel.style.filter="blur(0px)"
//     pawel.style.zIndex="1"
//     lukasz.style.filter="blur(6px)"
//     lukasz.style.zIndex="0"

// })

// lukasz.addEventListener('click',function(){
    
//     lukasz.style.filter="blur(0px)"
//     lukasz.style.zIndex="1"
//     pawel.style.filter="blur(6px)"
//     pawel.style.zIndex=""

// })