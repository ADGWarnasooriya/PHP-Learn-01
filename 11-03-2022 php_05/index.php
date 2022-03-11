<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="registerProcess.php" method="post">
        <div class="container">

            <div class="box">
                <h1 class="topic">Create A New Account</h1>

                <span class="txt">First name</span><br>
                <input class="field" type="text" name="fname"><br><br>

                <span class="txt">Last name</span><br>
                <input class="field" type="text" name="lname"><br><br>

                <span class="txt">Email</span><br>
                <input class="field" type="text" name="email"><br><br>

                <span class="txt">Mobile</span><br>
                <input class="field" type="text" name="mobile"><br><br>

                <span class="txt">Password</span><br>
                <input class="field" type="text" name="pw"><br><br>

                <span class="txt">City</span><br>
                <input class="field" type="text" name="city"><br><br>

                <button class="btn" type="submit">Create Account</button>

            </div>

            <script src="./script.js"></script>
        </div>

    </form>
</body>

</html>