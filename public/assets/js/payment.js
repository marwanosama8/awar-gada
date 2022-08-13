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



// start payment
let plus = document.querySelector(".plus")
let minus = document.querySelector(".minus")

let NUM = document.querySelector(".exeption")

let countInput = 0;

plus.onclick = function () {
    if (countInput < 10) {
        countInput += 1;
    }
    
    if (countInput <= 10) {
        NUM.innerHTML = " " + countInput
    } else {
        console.log("done")
    }
}

minus.onclick = function () {
    if (countInput > 0) {
        countInput -= 1;
    }
    
    if (countInput <= 10) {
        NUM.innerHTML = " " + countInput
    } else {
        console.log("done")
    }
}
// end payment