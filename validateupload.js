function fileValidation() {
           
    var fileInput =
        document.getElementById('myheadshot');
    var fileInput2 = document.getElementById('mylogo');
     
    var filePath = fileInput.value;
    var filePath2 = fileInput2.value;
    
    // Allowing file type
    var allowedExtensions =
    /(\.gif|\.jpeg|\.png|\.jpg)$/i;
    
    if(file)
    if (!allowedExtensions.exec(filePath)) {
        alert('Invalid file type');
        //showMessage(fileInput, "Invalid file type")
        fileInput.value = '';
        return false;
    }else if(fileInput.files[0].size/(1024*1024)>=10){
        alert('File size must be smaller than 10 mb');
        //showMessage(fileInput, "File size must be smaller than 10mb")
        fileInput.value = '';
        return false;
    }

    if (!allowedExtensions.exec(filePath2)) {
        alert('Invalid file type');
        //showMessage(fileInput2, "invalid file type");
        fileInput2.value = '';
        return false;
    }else if(fileInput2.files[0].size/(1024*1024)>=10){
        alert('File size must be smaller than 10 mb');
        /*showMessage(fileInput2, "File size must be smaller than 10mb");*/
        fileInput2.value = '';
        return false;
    }
}
function showMessage(input, message){
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    small.innerText = message;

    formControl.className = 'form-control error'
}
function setSuccessFor(input){
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}