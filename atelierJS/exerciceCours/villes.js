const td=document.querySelectorAll("table td");
let i=0;
function appear(){
    td[i].classList.add("black");
    i++;
}
setInterval(appear, 1000);
