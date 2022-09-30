// form validation

const formSubmit = document.querySelector('#submit');
const form = document.querySelector('form');


formSubmit.addEventListener('click', (e) => {

    let email = document.querySelector('.email input').value;
    let emailStar = document.querySelector('.e-star');
    let emailDiv = document.querySelector('#email');
    const regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    //email regex checks
    if(!email.match(regex)) {

        e.preventDefault();
        document.querySelector('.error').innerHTML = `Invalid email address`;
        emailStar.style.color = 'red';
        emailDiv.style.border = '2px solid red';
        // console.log(email);
        // test to see whether the email address actually shows up on failure

    } else if(email === '') {

        // empty email field checks
        e.preventDefault();
        document.querySelector('.error').innerHTML = `Please fill in required fields`;
        Star.style.color = 'red';
        emailDiv.style.border = '2px solid red';

    } else {

        //returns styling back to default
        emailStar.style.color = 'black';
        emailDiv.style.border = '1px solid black';
    }
});

formSubmit.addEventListener('click', (e) => {

    //first name field checks
    let name = document.querySelector('.fname input').value;
    let Star = document.querySelector('.name-star');
    let nameDiv = document.querySelector('#fname');

    if(name === '') {

        e.preventDefault();
        document.querySelector('.error').innerHTML = `Please fill in required fields`;
        Star.style.color = 'red';
        nameDiv.style.border = '2px solid red';

    } else {

        //returns styling back to default
        Star.style.color = 'black';
        nameDiv.style.border = '1px solid black';
    }
});

formSubmit.addEventListener('click', (e) => {

    //message area checks
    let message = document.querySelector('.message textarea').value;
    let Star = document.querySelector('.mess-star');
    let messageDiv = document.querySelector('#message');

    if(message === '') {

        e.preventDefault();
        document.querySelector('.error').innerHTML = `Please fill in required fields`;
        Star.style.color = 'red';
        messageDiv.style.border = '2px solid red';

    } else {

        //returns styling back to default
        Star.style.color = 'black';
        messageDiv.style.border = '1px solid black';
    }
});