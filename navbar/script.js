let togl=document.querySelector(".toggle-button")
var mobile=document.querySelector(".mobile-nav")
let icon=document.querySelector(".icon")
icon.addEventListener('click',()=>{
    icon.classList.toggle("fa-xmark")
    mobile.classList.toggle('n')
    document.querySelector(".log").classList.toggle('b')
})