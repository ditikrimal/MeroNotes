const inputs = document.querySelectorAll(".input-field");
const toggle_btn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");
const toggle_btn_out = document.querySelectorAll(".outToggle");
const bullets = document.querySelectorAll(".bullets span");
const images = document.querySelectorAll(".image");
const bgImg = document.getElementById("bgimg");


inputs.forEach((inp) => {
  inp.addEventListener("focus", () => {
    inp.classList.add("active");
  });
  inp.addEventListener("blur", () => {
    if (inp.value != "") return;
    inp.classList.remove("active");
  });
});

toggle_btn.forEach((btn) => {
  btn.addEventListener("click", () => {
    main.classList.toggle("sign-up-mode");
  });
});

toggle_btn_out.forEach((btn) => {
  btn.addEventListener("click", () => {
    window.location = "index.php";
    main.classList.toggle("sign-up-mode");
  });
});
const hamburger = document.querySelector('.hamburger');
const menu =document.querySelector('.menu');
const mblMenu=document.querySelector('.mobileNav');
hamburger.addEventListener('click',function(){
  this.classList.toggle('is-active');
  bgImg.classList.toggle('bgimg-navActive');
  mblMenu.classList.toggle('is-active');
});


