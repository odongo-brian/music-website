var dropdowns = document.querySelectorAll('.dropdown-list');
for(var i = 0; i < dropdowns.length; i++){
    dropdowns[i].classList.add("hide");
}
var dropdowns = document.querySelector("header").querySelectorAll(".dropdown");
for (let i = 0; i < dropdowns.length; i++) {
    dropdowns[i].addEventListener("click", function(e){
        var links = e.currentTarget.parentNode.querySelectorAll(".dropdown-list");
        for (let i = 0; i < links.length; i++) {
            if(e.currentTargetn.querySelector(".dropdown-list") != links[i]){
                links[i].classList.add("hide");
            }
            
        }
        e.currentTarget.querySelector('.dropdown-list').classList.toggle("hide");
    })
    
}