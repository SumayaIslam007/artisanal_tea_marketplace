document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("form").addEventListener("submit", function (event) {
        let isValid = true;

        // Clear previous errors
        document.querySelectorAll(".error").forEach(el => el.innerHTML = "");

        // Name validation
        let name = document.getElementById("name").value.trim();
        if (name === "") {
            document.getElementById("nameError").innerHTML = "Name is required.";
            isValid = false;
        }

        // Email validation
        let email = document.getElementById("email").value.trim();
        let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (email === "") {
            document.getElementById("emailError").innerHTML = "Email is required.";
            isValid = false;
        } else if (!emailPattern.test(email)) {
            document.getElementById("emailError").innerHTML = "Invalid email format.";
            isValid = false;
        }

        // Username validation
        let username = document.getElementById("username").value.trim();
        if (username === "") {
            document.getElementById("usernameError").innerHTML = "Username is required.";
            isValid = false;
        } else if (username.length < 5) {
            document.getElementById("usernameError").innerHTML = "Username must be at least 5 characters.";
            isValid = false;
        }

        // Password validation
        let password = document.getElementById("password").value;
        if (password === "") {
            document.getElementById("passwordError").innerHTML = "Password is required.";
            isValid = false;
        } else if (password.length < 6) {
            document.getElementById("passwordError").innerHTML = "Password must be at least 6 characters.";
            isValid = false;
        }

        // Phone Number validation (exactly 11 digits)
        let phone = document.getElementById("phone").value.trim();
        let phonePattern = /^[0-9]{11}$/;
        if (phone === "") {
            document.getElementById("phoneError").innerHTML = "Phone number is required.";
            isValid = false;
        } else if (!phonePattern.test(phone)) {
            document.getElementById("phoneError").innerHTML = "Phone number must be exactly 11 digits.";
            isValid = false;
        }

        // Salary validation (must be non-negative)
        let salary = document.getElementById("salary").value.trim();
        if (salary !== "" && parseFloat(salary) < 0) {
            document.getElementById("salaryError").innerHTML = "Salary cannot be negative.";
            isValid = false;
        }

        // Prevent form submission if there are errors
        if (!isValid) {
            event.preventDefault();
        }
    });
});
