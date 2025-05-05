const nextBtns = document.querySelectorAll('.next-btn');
const prevBtns = document.querySelectorAll('.prev-btn');
const steps = document.querySelectorAll('.form-step');

let currentStep = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener('click', () => {
    if (currentStep < steps.length - 1) {
      steps[currentStep].classList.remove('active');
      currentStep++;
      steps[currentStep].classList.add('active');
    }
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener('click', () => {
    if (currentStep > 0) {
      steps[currentStep].classList.remove('active');
      currentStep--;
      steps[currentStep].classList.add('active');
    }
  });
});

const checkbox = document.getElementById('agreeCheckbox');
const submitBtn = document.getElementById('submitBtn');

checkbox.addEventListener('change', () => {
  submitBtn.disabled = !checkbox.checked;
});

submitBtn.addEventListener('click', function (e) {
  e.preventDefault(); // Prevent form submission for now
  steps[currentStep].classList.remove('active');
  currentStep++;
  steps[currentStep].classList.add('active');
});
