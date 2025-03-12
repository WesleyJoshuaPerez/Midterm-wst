const text = "Login";
let index = 0;
let isDeleting = false;

function typeEffect() {
  const element = document.getElementById("typing");

  if (!isDeleting) {
    element.innerHTML = text.substring(0, index + 1);
    index++;
  }

  let speed = isDeleting ? 250 : 250; // Typing speed

  setTimeout(typeEffect, speed);
}

typeEffect();
