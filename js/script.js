function validateInput() {
// storing the inputs in variables
var name = document.getElementById("name").value;
var email = document.getElementById("email").value;
var address = document.getElementById("address").value;
var city = document.getElementById("city").value;
var zip = document.getElementById("zip").value;
var comment = document.getElementById("comment").value;
// Regular Expressions
var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
var zipReg = /\d{5}/;
var nameReg = /^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$/;
//var whiteSpaceReg = /\s/g;
// returns true to validateInput if all condidtions met
if (name.trim().length != 0 
    && email.trim().length != 0 
    && address.trim().length != 0
    && city.trim().length !=0
    && zip.trim().length !=0) 
{
    
    if(name.match(nameReg))
    {
        if(email.match(emailReg)) 
        {
        
            if(zip.match(zipReg))
            {
                return true;
            }
            else
            {
                sweetAlert("Oops...", "Please enter a vaild Zip Code!", "error");
                return false;
            }
    }
    else 
    {
        sweetAlert("Oops...", "Please enter a valid email!", "error");
        return false;
    }
    } 
    else 
    {
        
        sweetAlert("Oops...", "Please enter a vail name!", "error");
        return false;
    }
    
} 
else 
{
    sweetAlert("Oops...", "All fields are required!", "error");
    return false;
}
    
    
}
function validatePurchase(){
    swal({   title: "Confirmation",   
          text: "Please press OK to place your imaginary order !",   
          type: "info",   
          showCancelButton: true,   
          closeOnConfirm: false,   
          showLoaderOnConfirm: true, }, 
         function(){   setTimeout(function(){     
                        sweetAlert("Awesome...", "Your imaginary order is on its way!", "success");   }, 2000); 
                   });
}

function welcomeMessage(){
    swal({   title: "Welcome to my project!",   text: "Please ignore any typos..and its totally imaginary.",   timer: 3000,   showConfirmButton: false });
}
function loginForm(){
    swal({
  title: 'Log In',
  html:
    '<label>User Name</label>'+
    '<input id="swal-input1" type="text"  class="swal2-input" autofocus required>' +
     '<label>Password</label>' +  
    '<input id="swal-input2" type="password" class="swal2-input" required>',
  preConfirm: function() {
    return new Promise(function(resolve) {
      if (true) {
        resolve([
          $('#swal-input1').val(),
          $('#swal-input2').val()
        ]);
      }
    });
  }
}).then(function() {
  sweetAlert("Awesome...!", "Logged In", "success");
})
}
function signupForm(){
    swal({
  title: 'Log In',
  html:
    '<label>Full Name</label>'+
    '<input id="swal-input1" type="text"  class="swal2-input" autofocus required>' +
     '<label>Email</label>' +  
    '<input id="swal-input2" type="email" class="swal2-input" required>'+
        '<label>Password</label>'+
    '<input id="swal-input3" type="password"  class="swal2-input" autofocus required>' +
     '<label>Confirm Password</label>' +  
    '<input id="swal-input4" type="password" class="swal2-input" required>',
  preConfirm: function() {
    return new Promise(function(resolve) {
      if (true) {
        resolve([
          $('#swal-input1').val(),
          $('#swal-input2').val(),
          $('#swal-input3').val(),
          $('#swal-input4').val()
        ]);
      }
    });
  }
}).then(function() {
  sweetAlert("Welcome...!", "You are Signed In", "success");
})
}


/*function validateHtmlFive(){
    var myform = document.getElementById("myForm").value;
    if (myformform.checkValidity() == false) {
        document.getElementById("demo").innerHTML = inpObj.validationMessage;
    } else {
        document.getElementById("demo").innerHTML = "Input OK";
    }
}
}*/