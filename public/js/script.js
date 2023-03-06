// auth view
const loginBtn = document.querySelector('#login-button');
const registerBtn = document.querySelector('#register-button');
const loginForm = document.querySelector('#login-form');
const regForm = document.querySelector('#register-form');

regForm.style.display = "none";

const forms = {
  login: {
    btn: loginBtn,
    form: loginForm,
  },
  register: {
    btn: registerBtn,
    form: regForm,
  },
};

function toggleFormStyles(activeForm) {
  for (const formName in forms) {
    const { btn, form } = forms[formName];
    const isActive = activeForm === formName;

    btn.classList.toggle('text-light', isActive);
    btn.classList.toggle('text-secondary', !isActive);
    form.style.display = isActive ? 'block' : 'none';
  }
}

registerBtn.addEventListener('click', () => {
  toggleFormStyles('register');
});

loginBtn.addEventListener('click', () => {
  toggleFormStyles('login');
});


