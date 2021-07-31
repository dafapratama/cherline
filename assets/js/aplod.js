var display = document.getElementById("display");
var ganti = document.getElementById("ganti");
var save = document.getElementById("save");






ganti.addEventListener("click", e =>{
    e.preventDefault();
    display.classList.toggle("display");
   
})

save.addEventListener("click", e =>{
    e.preventDefault();
    display.classList.toggle("display");
   
})