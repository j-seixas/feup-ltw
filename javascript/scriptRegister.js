let userName = document.querySelector('#register input[name=userName]');
userName.addEventListener('keyup', validUsername, false);

let password = document.querySelector('#register input[name=password]');
let confirmPassword = document.querySelector('#register input[name=cpassword]');
password.addEventListener('keyup', validPassword, false);
confirmPassword.password = password;
confirmPassword.addEventListener('keyup', validConfirmPassword, false);

let register = document.querySelector('#signup .form form');
register.addEventListener('submit', validRegister, false);

function validUsername() {
  if (!/^[a-zA-Z.@-_0-9].{3,}$/.test(this.value))
    this.classList.add('red');
  else
    this.classList.remove('red');
}

function validPassword() {
  if (!/^.*(?=.*[A-Z])(?=.*[!@#$&*])(?=.*[0-9]).{8,}$/.test(this.value))
    this.classList.add('red');
  else
    this.classList.remove('red');
}

function validConfirmPassword(event) {
  if (this.value !== this.password.value)
    this.classList.add('red');
  else
    this.classList.remove('red');
}

function validRegister(event) {
  let inputs = this.querySelectorAll('input');
  for (let i = 0; i < inputs.length; i++)
    if (inputs[i].classList.contains('red'))
     event.preventDefault();
}
