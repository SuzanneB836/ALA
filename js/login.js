function validateLogin() {
    var email = document.getElementById("fname").value;
    var password = document.getElementById("lname").value;

    // Replace this with your actual validation logic
    if (email === "admin" && password === "admin") {
        alert("Login successful. Redirect to dashboard or perform further actions here.");
    } else {
        alert("Incorrect email or password. Please try again.");
    }
}
