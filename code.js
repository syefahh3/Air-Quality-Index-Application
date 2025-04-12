function validate() {

    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let pass = document.getElementById('password').value;
    let cpass = document.getElementById('cpassword').value;
    let loc = document.getElementById('location').value;
    let zipcode = document.getElementById('zipcode').value;
    let terms = document.getElementById('termsCheck').checked;

    const nameRegex = /^[A-Za-z\s]+$/;
    const emailRegex = /^\d{2}-\d{5}-\d@student\.aiub\.edu$/;
    const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
    

    
    if (name == "" || email == "" || pass == "" || cpass == "" || loc == "" || zipcode == "----") {
        document.getElementById('errormessage').innerHTML = "Please fill out all fields.";
        
        return false;
    }
    if (!terms) {
        document.getElementById('errormessage').innerHTML = "Please accept the terms and conditions.";
        
        return false;
    }
    if (!nameRegex.test(name)) {
        document.getElementById('errormessage').innerHTML = "Name should only contain letters and spaces.";
        
        return false;
    }
    if (!emailRegex.test(email)) {
        document.getElementById('errormessage').innerHTML = "Email must be in the format: 12-34567-8@student.aiub.edu";
        
        return false;
    }
    if (!passwordRegex.test(pass)) {
        document.getElementById('errormessage').innerHTML = "Password must be at least 8 characters long including letters, numbers, and special characters.";
       
        return false;
    }
    if (pass != cpass) {
        document.getElementById('errormessage').innerHTML = "Passwords do not match.";
       
        return false;
    }
    if (zipcode=="") {
        document.getElementById('errormessage').innerHTML = "Zipcode must be exactly 4 digits.";
        
        return false;
    }
    alert("Form submitted successfully!");
    

    return true;


     
  }
  