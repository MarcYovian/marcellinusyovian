// Navbar Fix
window.onscroll = function () {
    const header = document.querySelector('header');
    const fixedNav = header.offsetTop;

    if (window.scrollY > fixedNav) {
        header.classList.add('navbar-fixed');
    } else {
        header.classList.remove('navbar-fixed');
    }
};

// Hamburger
const hamburger = document.querySelector('#hamburger');
const navMenu = document.querySelector('#nav-menu');

hamburger.addEventListener('click', function () {
    hamburger.classList.toggle('hamburger-active');
    navMenu.classList.toggle('hidden');
});

const scriptURL =
    'https://script.google.com/macros/s/AKfycbz8xsqgLCZYTWvlCVTKj2AF3ASiPWklbXRcXcYMCasYd03ol9IArPYyDkZA4-iPYhg3/exec';
const form = document.forms['my-contact-form'];
const btnSend = document.querySelector('.btn-send');
const btnLoading = document.querySelector('.btn-loading');
const successAlert = document.querySelector('.success-alert');
const btnCloseAlert = document.querySelector('.btn-close');

form.addEventListener('submit', (e) => {
    e.preventDefault();
    // button submit on click

    // show btn loading, not showing btn send
    btnLoading.classList.toggle('hidden');
    btnSend.classList.toggle('hidden');
    fetch(scriptURL, {
        method: 'POST',
        body: new FormData(form),
    })
        .then((response) => {
            // show btn send, not showing btn loading
            btnLoading.classList.toggle('hidden');
            btnSend.classList.toggle('hidden');
            successAlert.classList.toggle('hidden');

            // reset form
            form.reset();
            console.log('Success!', response);
        })
        .catch((error) => console.error('Error!', error.message));
});

btnCloseAlert.addEventListener('click', function () {
    successAlert.classList.toggle('hidden');
});
