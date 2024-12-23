// toggle between hindding and showing form based on user selection
const signupbutton=document.getElementById('signupbutton');
const signinbutton=document.getElementById('signinbutton');
const signinForm=document.getElementById('signin');
const signupform=document.getElementById('signup');

signupbutton.addEventListener('click',function(){
    signinForm.style.display='none';
    signupform.style.display='block';
})

signinbutton.addEventListener('click',function(){
    signupform.style.display='none';
    signinForm.style.display='block';
})