'use strict';

function validator() {
  var fName = document.getElementById('fname');
  var email = document.getElementById('email');
  var pass = document.getElementById('pass');
  var comment = document.getElementById('comment');
  var male = document.getElementById('male');
  var female = document.getElementById('female');
  var others = document.getElementById('others');

  var nameErr = document.getElementById('name-err');
  var emailErr = document.getElementById('email-err');
  var passErr = document.getElementById('pass-err');
  var commentErr = document.getElementById('cmnt-err');
  var genderErr = document.getElementById('gender-err');

  var nameErrMsg = '';
  var emailErrMsg = '';
  var passErrMsg = '';
  var cmntErrMsg = '';
  var genderErrMsg = '';

  var regex =
    /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
  var flag = 0;

  
  if (fName.value.length < 1) {
    nameErrMsg = '* Please enter your name.';
    flag = 1;
  } else if (fName.value.length < 5) {
    nameErrMsg = '* Name must be at least 5 characters long.';
    flag = 1;
  }


  if (email.value.length < 1) {
    emailErrMsg = '* Please enter your e-mail.';
    flag = 1;
  } else if (regex.test(email.value) == false) {
    emailErrMsg = '* Invalid E-mail!';
    flag = 1;
  }


  if (pass.value.length < 1) {
    passErrMsg = '* Please enter a password!';
    flag = 1;
  } else if (pass.value.length < 5) {
    passErrMsg = '* Invalid passowrd!';
    flag = 1;
  }


  if (comment.value.length < 1) {
    cmntErrMsg = '* Comment is required!';
    flag = 1;
  }


  if (
    male.checked === false &&
    female.checked === false &&
    others.checked === false
  ) {
    genderErrMsg = '* Select a gender.';
  }


  if (flag == 1) {
    nameErr.innerHTML = nameErrMsg;
    emailErr.innerHTML = emailErrMsg;
    passErr.innerHTML = passErrMsg;
    commentErr.innerHTML = cmntErrMsg;
    genderErr.innerHTML = genderErrMsg;
    return false;
  }
}
