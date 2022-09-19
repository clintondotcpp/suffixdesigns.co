function fileValidation(){
    var fileInput = document.getElementById('headshot');
var filePath = fileInput.ariaValueMax;

//Allowing file type
var allowedExtensions = /(\.jpeg|\.jpg|\.JPEG|\.JPG|\.png|\.PNG\.gif|\.GIF)$/i;
if(!allowedExtensions.exec(filePath)){
    alert('invalid file type');
    fileInput.value = "";
}

}



/*// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
    'use strict'
    
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    $("#headshot").on("change", function () {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings("#file_name").addClass("selected").html(fileName);
    });

    var forms = document.querySelectorAll('.needs-validation')
   
  
    // Loop over them and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          var image = document.getElementById('uploadfile').value;
          if (image != '') {
            var checkimg = image.toLowerCase();
            if (!checkimg.match(/(\.jpg|\.png|\.JPG|\.PNG|\.jpeg|\.JPEG)$/)) {
                alert("Please Select jpg,png File");
                document.getElementById('headshot').value = "";
                document.getElementById('file_name').innerHTML = "Choose file";
                exit;
            }
            var image = document.getElementById('uploadfile');
            var size = parseFloat(image.files[0].size / (1024 * 1024)).toFixed(2);
            if (size > 2) {
                alert("Please Select Size Less Than 2 MB");
                document.getElementById('headshot').value = "";
                document.getElementById('file_name').innerHTML = "Choose file";
                exit;
            } else {
                alert("Valid File");
            }
        }
  
          form.classList.add('was-validated')
        }, false)
      })
  })() */