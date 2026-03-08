const signUpButton = document.getElementById('signUpButton');
const signInButton = document.getElementById('signInButton');
const signInForm = document.getElementById('signIn');
const signUpForm = document.getElementById('signUp');
const registerSection = document.querySelector('.register');
const loginSection = document.querySelector('.login-section');

registerSection.style.display = 'none';

signUpButton.addEventListener('click', function() {
    loginSection.style.display = 'none';
    registerSection.style.display = 'block';
    signUpForm.style.display = 'block';
   
    window.scrollTo(0, 0);
});

signInButton.addEventListener('click', function() {
    registerSection.style.display = 'none';
    loginSection.style.display = 'flex';
    signInForm.style.display = 'block';
   
    window.scrollTo(0, 0);
});