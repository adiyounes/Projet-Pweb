consol.log("hello");
const slideContainer= document.querySelector('.wrapper');
const slide = document.querySelector('.s-slides');
const interval = 2000;

let slides = document.querySelectorAll('.s-slide');
let index = 1;
const firstClone =slides[0].cloneNode(true);
const secondClone =slides[1].cloneNode(true);
const thirdClone =slides[2].cloneNode(true);
const fourthClone =slides[3].cloneNode(true);

const lastClone =slides[slides.length-1].cloneNode(true);

firstClone.id='firstClone';
lastClone.id='lastClone';
secondClone.id='secondClone';
thirdClone.id='thirdClone';
fourthClone.id='fourthClone';

slide.append(firstClone);
slide.append(secondClone);
slide.append(thirdClone);
slide.append(fourthClone);
slide.prepend(lastClone);

const slideWidth = slides[index].clientWidth +110;

slide.style.transform = `translateX(${-slideWidth * index}px)`;

const startSlide = ()=>{
    setInterval(()=>{
        index++;
        slide.style.transform = `translateX(${-slideWidth * index}px)`;  
        slide.style.transition = '0.7s';
    },interval)
}

slide.addEventListener('transitionend',()=>{
    let slides = document.querySelectorAll('.s-slide');
    if(slides[index].id === firstClone.id){
        console.log(firstClone.id);
        slide.style.transition = 'none';
        index = 1;
        slide.style.transform = `translateX(${-slideWidth * index}px)`;
    }
})

startSlide();
