const slides = document.querySelectorAll(".carousel-item");
const dots = document.querySelectorAll(".dot");

const nextBtn = document.querySelector(".next");
const prevBtn = document.querySelector(".prev");

let current = 0;

// =========================
// TAMPILKAN SLIDE
// =========================

function showSlide(index){

    slides.forEach((slide)=>{

        slide.classList.remove("active","left","right");

    });

    dots.forEach(dot=>{

        dot.classList.remove("active");

    });

    // Slide aktif
    slides[index].classList.add("active");
    dots[index].classList.add("active");

    // Slide kiri
    let left = index - 1;

    if(left < 0){

        left = slides.length - 1;

    }

    slides[left].classList.add("left");

    // Slide kanan
    let right = index + 1;

    if(right >= slides.length){

        right = 0;

    }

    slides[right].classList.add("right");

}

showSlide(current);

// =========================
// NEXT
// =========================

nextBtn.addEventListener("click",()=>{

    current++;

    if(current >= slides.length){

        current = 0;

    }

    showSlide(current);

});

// =========================
// PREV
// =========================

prevBtn.addEventListener("click",()=>{

    current--;

    if(current < 0){

        current = slides.length - 1;

    }

    showSlide(current);

});

// =========================
// AUTO PLAY
// =========================

setInterval(()=>{

    current++;

    if(current >= slides.length){

        current = 0;

    }

    showSlide(current);

},5000);


// =========================
// KLIK DOT
// =========================

dots.forEach((dot,index)=>{

    dot.addEventListener("click",()=>{

        current=index;

        showSlide(current);

    });

});


// =========================
// SWIPE HP
// =========================

let startX = 0;

const slider = document.querySelector(".carousel");

slider.addEventListener("touchstart",(e)=>{

    startX = e.touches[0].clientX;

});

slider.addEventListener("touchend",(e)=>{

    let endX = e.changedTouches[0].clientX;

    if(startX-endX > 50){

        current++;

        if(current>=slides.length){

            current=0;

        }

        showSlide(current);

    }

    if(endX-startX > 50){

        current--;

        if(current<0){

            current=slides.length-1;

        }

        showSlide(current);

    }

});

document.querySelector(".scroll-down").addEventListener("click", function(e){

    e.preventDefault();

    document.querySelector("#destinasi").scrollIntoView({

        behavior:"smooth"

    });

});