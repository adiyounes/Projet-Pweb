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
        <a href="Events.php" class="nav-page">Evènements</a>
    </li>
    <li class="main-nav-element">
        <a href="Contact.php" class="nav-page">Contact</a>
    </li>
    <a href="" class="reg-button">S'inscrire<i class="fas fa-arrow-right"></i></a>
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