let next = document.getElementById("next");
let prev =  document.getElementById("prev");
next.addEventListener("click", () => {
    let opinie = document.getElementById("opinie");

    opinie.scrollBy({left: opinie.scrollWidth/4, behavior:"smooth"})

    prev.style.display = opinie.scrollLeft < 0 ? "none" : "block";
    next.style.display = opinie.scrollLeft >= ((opinie.scrollWidth) - (opinie.scrollWidth/2)) ? "none" : "block";

    console.log(opinie.scrollLeft,(opinie.scrollWidth) - (opinie.scrollWidth/2));

});

prev.addEventListener("click", () => {
    let opinie = document.getElementById("opinie");

    opinie.scrollBy({left: -opinie.scrollWidth/4, behavior:"smooth"})

    prev.style.display = opinie.scrollLeft <= opinie.scrollWidth/4 ? "none" : "block";
    next.style.display = "block";
    
    console.log(opinie.scrollLeft,(opinie.scrollWidth));
    

 
});
