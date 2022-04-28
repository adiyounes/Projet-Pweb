const slideContainer= document.querySelector('.slides-container');
const slide = document.querySelector('.slides');
const nextBtn = document.getElementById('next-btn');
const prevBtn = document.getElementById('prev-btn');
const interval = 6000;

let slides = document.querySelectorAll('.slide');
let index = 1;
let intervalID;

const firstClone =slides[0].cloneNode(true);
const lastClone =slides[slides.length-1].cloneNode(true);

firstClone.id = 'first-clone';
lastClone.id = 'last-clone';
slide.append(firstClone);
slide.prepend(lastClone);

const slideWidth = slides[index].clientWidth;

slide.style.transform = `translateX(${-slideWidth * index}px)`;

const startSlide = ()=>{
    intervalID=setInterval(()=>{
        index++;
        slide.style.transform = `translateX(${-slideWidth * index}px)`;
        slide.style.transition = `.7s`;
    },interval )
};
console.log(intervalID);
slide.addEventListener('transitionend',()=>{
    let slides = document.querySelectorAll('.slide');
    if(slides[index].id === firstClone.id){
        slide.style.transition = 'none';
        index=1;
        slide.style.transform = `translateX(${-slideWidth * index}px)`;
    }
});

slide.addEventListener('mouseenter',()=>{
    clearInterval(intervalID);
});
slide.addEventListener('mouseleave',()=>{
    startSlide();
})


startSlide();


// -------------------------------------------------
nextBtn.addEventListener('mouseenter',()=>{
    clearInterval(intervalID);
});
nextBtn.addEventListener('mouseleave',()=>{
    startSlide();
})

prevBtn.addEventListener('mouseenter',()=>{
    clearInterval(intervalID);
})
prevBtn.addEventListener('mouseleave',()=>{
    startSlide();
})

// nextBtn.addEventListener('click',()=>{
//     let slides = document.querySelectorAll('.slide');
//     if(slides[index].id === firstClone.id){
//         slide.style.transition = 'none';
//         index=1;
//         slide.style.transform = `translateX(${-slideWidth * index}px)`;
//     }else{
//         index++;
//         slide.style.transform = `translateX(${-slideWidth * index}px)`;
//         slide.style.transition = `.7s`;
//     }
// })

// prevBtn.addEventListener('click',()=>{
//     let slides=document.querySelectorAll('.slide');
//     if(slides[index].id === 'last-clone'){
//         slide.style.transition='none';
//         index=slides.length-1;
//         slide.style.transform=`translateX(${slideWidth * index}px)`;
//     }else{
//         index--;
//         slide.style.transform=`translateX(${slideWidth * index}px)`
//         slide.style.transition='.7s';
//     }
// });