function validateForm() {
    var name = document.getElementById("name").value.trim();
    var email = document.getElementById("email").value.trim();
    var phonenumber = document.getElementById("phonenumber").value.trim();
    var password = document.getElementById("password").value.trim();
    var confirmpassword = document.getElementById("confirmpassword").value.trim();

    var nameError = document.getElementById("nameError");
    var emailError = document.getElementById("emailError");
    var phoneError = document.getElementById("phoneError");
    var passwordError = document.getElementById("passwordError");
    var confirmError = document.getElementById("confirmError");
    var successMessage = document.getElementById("successMessage");

    
    nameError.innerHTML = "";
    emailError.innerHTML = "";
    phoneError.innerHTML = "";
    passwordError.innerHTML = "";
    confirmError.innerHTML = "";
    successMessage.innerHTML = "";

    var valid = true;

    if(name === "") {
        nameError.innerHTML = "Full Name is required";
        valid = false;
    } else if(!/^[a-zA-Z ]+$/.test(name)) {
        nameError.innerHTML = "Only letters and spaces allowed";
        valid = false;
    }

   
    if(email === "") {
        emailError.innerHTML = "Email is required";
        valid = false;
    } else if(!/^(?=.*[@])(?=.*[.]).+$/.test(email)) {
        emailError.innerHTML = "Email must contain @ and .";
        valid = false;
    }

   
    if(phonenumber === "") {
        phoneError.innerHTML = "Phone number is required";
        valid = false;
    } else if(!/^[0-9]{11}$/.test(phonenumber)) {
        phoneError.innerHTML = "Enter a valid 11-digit phone number";
        valid = false;
    }

   
    if(password === "") {
        passwordError.innerHTML = "Password is required";
        valid = false;
    } else if(password.length < 6) {
        passwordError.innerHTML = "Password must be at least 6 characters";
        valid = false;
    }

   
    if(confirmpassword === "") {
        confirmError.innerHTML = "Confirm your password";
        valid = false;
    } else if(password !== confirmpassword) {
        confirmError.innerHTML = "Passwords do not match";
        valid = false;
    }

    return valid; 
}
