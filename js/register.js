const steps = document.querySelectorAll(".form-step");
const nextBtn = document.querySelector(".next-btn");
const prevBtn = document.querySelector(".prev-btn");

let currentStep = 0;

nextBtn.addEventListener("click", () => {
  steps[currentStep].classList.remove("active");
  currentStep++;
  steps[currentStep].classList.add("active");
});

prevBtn.addEventListener("click", () => {
  steps[currentStep].classList.remove("active");
  currentStep--;
  steps[currentStep].classList.add("active");
});
