// form validation

const formSubmit = document.querySelector('#submit');
const form = document.querySelector('form');


formSubmit.addEventListener('click', (e) => {

    let email = document.querySelector('.email input').value;
    let emailStar = document.querySelector('.e-star')
    const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    //email regex checks
    if(!email.match(regex)) {

        e.preventDefault();
        document.querySelector('.error').innerHTML = `<i class="far fa-times-circle"></i> Invalid email address`;
        emailStar.style.color = 'red';
        // console.log(email);
        // test to see whether the email address actually shows up on failure

    } else {

        emailStar.style.color = 'black';
    }
});

formSubmit.addEventListener('click', (e) => {

    //first name field checks
    let name = document.querySelector('.fname input').value;
    let Star = document.querySelector('.name-star');

    if(name === '') {

        e.preventDefault();
        document.querySelector('.error').innerHTML = `<i class="far fa-times-circle"></i> Please fill in required fields`;
        Star.style.color = 'red';

    } else {

        Star.style.color = 'black';
    }
});

formSubmit.addEventListener('click', (e) => {

    //message area checks
    let message = document.querySelector('.message textarea').value;
    let Star = document.querySelector('.mess-star');

    if(message === '') {

        e.preventDefault();
        document.querySelector('.error').innerHTML = `<i class="far fa-times-circle"></i> Please fill in required fields`;
        Star.style.color = 'red';

    } else {

        Star.style.color = 'black';
    }
});

formSubmit.addEventListener('click', (e) => {

    //email empty checks
    let email = document.querySelector('.email input').value;
    let Star = document.querySelector('.e-star');

    if(email === '') {

        e.preventDefault();
        document.querySelector('.error').innerHTML = `<i class="far fa-times-circle"></i> Please fill in required fields`;
        Star.style.color = 'red';

    }
});