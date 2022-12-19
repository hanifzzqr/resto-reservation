<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        body {
            background-image: url(../../assets/login.jpg);
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="login-form">
        <h1>Login Form</h1>
        <form action="#" method="post">
            <p>Full Name</p>
            <input type="text" name="fullname" placeholder="UserName">
            <p>Username</p>
            <input type="text" name="user" placeholder="UserName">
            <p>Password</p>
            <input type="password" name="password" placeholder="Password">
            <p>Verify Password</p>
            <input type="password" name="password2" placeholder="Password">
            <button class="btn btn-primary" type="submit">Sign Up</button>
        </form>

        <p class="fs-6">You have an account? <a href="../auth/login.php">Sign In Now!</a></p>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>