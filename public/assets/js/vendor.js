// start NavBar

let Nav = document.querySelector(".drob-hover");

window.onscroll = function () {
  if (this.scrollY > 100) {
    Nav.classList.add("active")
  } else {
    Nav.classList.remove("active")
  }
};

// // end NavBar



// start description
let divDisplayDescription = document.querySelector(".div-display-description");
let btnViewPlus = document.querySelector(".btn-view-plus");
let btnViewMinus = document.querySelector(".btn-view-minus");

btnViewPlus.onclick = () => {
  // divDisplayDescription.style.display = "block"
  $(".div-display-description").slideDown(1000);
  btnViewMinus.style.display = "block";
  btnViewPlus.style.display = "none";
};

btnViewMinus.onclick = () => {
  // divDisplayDescription.style.display = "none"
  $(".div-display-description").slideUp(1000);
  btnViewMinus.style.display = "none";
  btnViewPlus.style.display = "block";
};
// end description