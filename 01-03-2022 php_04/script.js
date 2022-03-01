function signIn() {
    var email = document.getElementById("e");
    var password = document.getElementById("p");

    // alert(email.value);
    // alert(password.value);

    if (email == "admin@gmail.com" & password == "Admin123") {
        alert("Success");
        window.location("home.php");
    }
}