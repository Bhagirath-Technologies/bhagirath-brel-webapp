
let calcScrollValue = () => {
  let ScrollProgress = document.getElementById("progress");
  let ProgressValue = document.getElementById("progress-value")
  let pos = document.documentElement.scrollTop;
let CalcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
let ScrollValue = Math.round(pos*100 / CalcHeight)
if(pos>100){
 ScrollProgress.style.display = "grid"
}
else{
    ScrollProgress.style.display = "none"
}
ScrollProgress.addEventListener("click",()=>{
    document.documentElement.scrollTop = 0
})
}
window.onscroll = calcScrollValue;
window.onload = calcScrollValue

const myCarousel = document.getElementById('myCarousel')
  myCarousel.addEventListener('slid.bs.carousel', function () {
    const activeItem = this.querySelector(".active");
    document.querySelector(".testi-img img").src = activeItem.getAttribute("data-img");
    document.querySelector(".testi-img .circle").style.backgroundColor = activeItem.getAttribute("data-color");
  })

