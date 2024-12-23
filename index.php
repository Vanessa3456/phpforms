<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register and Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container" id="signup" style="display:none">
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <!-- <label for="fName">First Name</label> -->
            </div>

            <div class="input-group">
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <!-- <label for="lName">Last Name</label> -->
            </div>
            <div class="input-group">
                <input type="email" name="email" id="email" placeholder="Email" required>
                <!-- <label for="email">Email</label> -->
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <!-- <label for="password">Password</label> -->
            </div>

            <input type="submit" class="btn" value="Sign up" name="signup">

        </form>
        <p class="or">
            --------or--------
        </p>
        <div class="links">
            <p>Already Have An Account</p>
            <button id="signinbutton">Sign in</button>
        </div>
    </div>


    <div class="container" id="signin">
        <h1 class="form-title">Log in</h1>
        <form method="post" action="register.php">

            <div class="input-group">
                <input type="email" name="email" id="email" placeholder="Email" required>
                <!-- <label for="email">Email</label> -->
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <!-- <label for="password">Password</label> -->
            </div>
            <p class="recover">
                <a href="forgot_password.php">Forgot password</a>
            </p>

            <input type="submit" class="btn" value="Log in" name="signin">

        </form>
        <p class="or">
            --------or-------
        </p>
        <div class="links">
            <p>Don't have an account yet?</p>
            <button id="signupbutton">Sign up</button>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>