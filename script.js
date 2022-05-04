// const slideContainer= document.querySelector('.slides-container');
// const slide = document.querySelector('.slides');
// const nextBtn = document.getElementById('next-btn');
// const prevBtn = document.getElementById('prev-btn');
// const interval = 6000;

// let slides = document.querySelectorAll('.slide');
// let index = 1;
// let intervalID;

// const firstClone =slides[0].cloneNode(true);
// const lastClone =slides[slides.length-1].cloneNode(true);

// firstClone.id = 'first-clone';
// lastClone.id = 'last-clone';
// slide.append(firstClone);
// slide.prepend(lastClone);

// const slideWidth = slides[index].clientWidth;

// slide.style.transform = `translateX(${-slideWidth * index}px)`;

// const startSlide = ()=>{
//     intervalID=setInterval(()=>{
//         index++;
//         slide.style.transform = `translateX(${-slideWidth * index}px)`;
//         slide.style.transition = `.7s`;
//     },interval )
// };
// console.log(intervalID);
// slide.addEventListener('transitionend',()=>{
//     let slides = document.querySelectorAll('.slide');
//     if(slides[index].id === firstClone.id){
//         slide.style.transition = 'none';
//         index=1;
//         slide.style.transform = `translateX(${-slideWidth * index}px)`;
//     }
// });

// slide.addEventListener('mouseenter',()=>{
//     clearInterval(intervalID);
// });
// slide.addEventListener('mouseleave',()=>{
//     startSlide();
// })


// startSlide();


// // -------------------------------------------------
// nextBtn.addEventListener('mouseenter',()=>{
//     clearInterval(intervalID);
// });
// nextBtn.addEventListener('mouseleave',()=>{
//     startSlide();
// })

// prevBtn.addEventListener('mouseenter',()=>{
//     clearInterval(intervalID);
// })
// prevBtn.addEventListener('mouseleave',()=>{
//     startSlide();
// })

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
// -----------------------------------------------------------------------
// -----------------------------------------------------------------
// const w=document.querySelectorAll('.nav-page');
// w[1].addEventListener('click',()=>{
//     w[1].style.color='red';
// })

var h=`<div class="main-nav">
<a href="#acceuil" class="main-nav-logo active">
    <img src="Logos/MC-logo-light.svg" alt="" width="0" height="0">
</a>
<ul class="main-nav-elements" id="main-nav-elements">
    <li class="main-nav-element">
        <a class="nav-page" href="index.html#Welcome">Accueil</a>
    </li>
    <li class="main-nav-element main-nav-element-hover">
        <a href="Presentation.html" class="nav-page">Présentation</a>
        <ul class="sub-nav-elements" id="sub-nav-elements">
            <li class="sub-nav-element">
                <a href="Presentation.html#Who">qui sommes nous</a>
            </li>
            <li class="sub-nav-element">
                <a href="Presentation.html#History">historique du club</a>
            </li>
            <li class="sub-nav-element">
                <a href="Presentation.html#Activities">activités du club</a>
            </li>
        </ul>
    </li>
    <li class="main-nav-element">
        <a href="Events.html" class="nav-page">Evènements</a>
    </li>
    <li class="main-nav-element">
        <a href="Contact.css" class="nav-page">Contact</a>
    </li>
    <button class="reg-button">S'inscrire<i class="fas fa-arrow-right"></i></button>
</ul>
</div>
`
document.getElementById("navbar").insertAdjacentHTML("afterbegin",h);

    let x=document.getElementById("navbar");
    let z=document.getElementById("sub-nav-elements");
    let y=0;
    window.addEventListener("scroll",(e)=>{
        a=document.documentElement.scrollTop
        if(a>1){
            x.style.position="fixed"
        }
        if(a>"500" && y==0){
            x.className+=" fix-it"
            z.className+=" fix-sub"
            y++
        }
        if(a<"500" && y==1){
            x.className="navbar"
            z.className="sub-nav-elements"
            y--;
        }
     })