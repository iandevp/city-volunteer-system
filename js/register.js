/* ---------- element shortcuts ---------- */
const steps     = document.querySelectorAll('.form-step');
const nextBtns  = document.querySelectorAll('.next-btn');
const prevBtns  = document.querySelectorAll('.prev-btn');
const checkbox  = document.getElementById('agreeCheckbox');
const submitBtn = document.querySelector('button[type="submit"], #submitBtn'); // if you add one later
let   current   = 0;

/* ---------- helpers ---------- */
// inputs inside a given step
const inputsInStep = stepIdx =>
  [...steps[stepIdx].querySelectorAll('input, select, textarea')];

// run browser validity only on the visible step
const stepIsValid = stepIdx =>
  inputsInStep(stepIdx).every(el => el.reportValidity());

/* ---------- navigation ---------- */
nextBtns.forEach(btn => btn.addEventListener('click', async () => {

  /* ---- step‑specific gates ---- */
  if (current === 0) {                              // STEP 1
    if (!stepIsValid(0)) return;                    // stop here
  }

  if (current === 1) {                              // STEP 2
    if (!stepIsValid(1)) return;

    /* extra client rules (password, username) */
    const user  = steps[1].querySelector('input[name="username"]');
    const pass  = steps[1].querySelector('input[name="password"]');
    const pass2 = steps[1].querySelector('input[name="confirm_password"]');
    if (pass.value !== pass2.value) {
      alert('Passwords do not match.');
      pass2.focus();
      return;
    }
    if (!/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/.test(pass.value)) {
      alert('Password must be at least 8 characters plus numbers.');
      pass.focus();
      return;
    }
    /* optional: uniqueness check here … */
  }

  if (current === 2 && !checkbox.checked) {         // STEP 3
    alert('Please agree to the terms and conditions.');
    return;
  }

  /* ---- move forward ---- */
  if (current < steps.length - 1) {
    steps[current].classList.remove('active');
    current++;
    steps[current].classList.add('active');
  }
}));

prevBtns.forEach(btn => btn.addEventListener('click', () => {
  if (current > 0) {
    steps[current].classList.remove('active');
    current--;
    steps[current].classList.add('active');
  }
}));

/* ---------- optional final submit lock ---------- */
if (submitBtn) {
  checkbox.addEventListener('change', () => {
    if (current === 2) submitBtn.disabled = !checkbox.checked;
  });
}
