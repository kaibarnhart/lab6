function verifyPassword() {
    const pwd1 = document.getElementById("password1").value;
    const pwd2 = document.getElementById("password2").value;
    if (pwd1.length < 8) {
        alert("Password must be at least 8 characters long.");
    } else if (pwd1 !== pwd2) {
        alert("Passwords do not match.");
    } else {
        alert("Passwords match!");
    }
}
