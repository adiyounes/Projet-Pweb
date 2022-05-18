

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