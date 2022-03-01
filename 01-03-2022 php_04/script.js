function signIn() {
    var email = document.getElementById("e");
    var password = document.getElementById("p");

    // alert(email.value);
    // alert(password.value);

    if (email.value == "admin@gmail.com" && password.value == "Admin123") {
        alert("Success");
        window.location("home.php");
    } else {
        alert("email or password incorrect")
    }
}