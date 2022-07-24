const email = document.getElementById('email');
const confirmEmail = document.getElementById('confirm_email');
const headshot = document.getElementById('headshot');
const logo = document.getElementById('logo');
const formBox = document.getElementById('order');
const errorElement = document.getElementById('error');

formBox.addEventListener('submit', (e)=>{
    let messages = []
    if(email.value === '' || email.value == null){
        messages.push("Name is required");
    }

    if(confirmEmail.value === '' || confirmEmail.value == null){
        messages.push("Name is required");
    }

    if(headshot.value === '' || headshot.value == null){
        messages.push('Please upload your headshot');
    }

    if(logo.value === '' || logo.value == null){
        messages.push('Please upload a logo');
    }

    if(messages.length > 0){
        e.preventDefault()
        errorElement.innerText  = messages.join(',')
    }
})



