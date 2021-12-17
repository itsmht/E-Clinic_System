let username = document.getElementById('Uname');
let password = document.getElementById('pass');
let button = document.querySelector('.btn');
let error = document.querySelectorAll('.error');
let err_msg = document.querySelectorAll('.err-msg');
let success = document.querySelectorAll('.success');
let f = 0;
console.log(username);
console.log(password);
console.log(button);
console.log(error);
console.log(err_msg);
console.log(success);
// console.log(button);
button.addEventListener('click', (e) => {
    // validate();
    if (username.value == '') {
        e.preventDefault();
        error[0].style.display = 'block';
        success[0].style.display = 'none';
        username.classList.add('border-color');
        err_msg[0].style.display = 'block';
        f = 1;
    } else {
        success[0].style.display = 'block';
        error[0].style.display = 'none';
        err_msg[0].style.display = 'none';
        username.classList.remove('border-color');
    }

    if (password.value == '') {
        e.preventDefault();
        error[1].style.display = 'block';
        success[1].style.display = 'none';
        password.classList.add('border-color');
        err_msg[1].style.display = 'block';
        f = 1;
    } else {
        success[1].style.display = 'block';
        error[1].style.display = 'none';
        err_msg[1].style.display = 'none';
        password.classList.remove('border-color');
    }
});

function validate() { }
