<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registration Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form-box active" id="login-form">
            <form action="">
                <h2>Login, if you dare...</h2>
                <input type="username" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Proceed</button>
                <p>Don't have an account? <a href="#" onclick="showForm('register-form')">Join the coven</a></p>
            </form>
        </div>

        <div class="form-box" id="register-form">
            <form action="">
                <h2>Join the Coven</h2>
                <input type="username" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="register">Join</button>
                <p>Already have an account? <a href="#" onclick="showForm('login-form')">Login here</a></p>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>