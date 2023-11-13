const images = document.querySelectorAll(".main img");
function handleScroll(){
    const windowScrollTop = window.pageYOffset;
    [...images].forEach(item =>{
       if(windowScrollTop >  item.offsetTop - item.offsetHeight  - 150){
        item.classList.add('active');
       }
    });
}
window.addEventListener("DOMContentLoaded",handleScroll)
window.addEventListener("scroll",handleScroll);