<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register</title>
</head>
<body>
<main>
    <form action="backend/register/xuLyRG.php" method="post" name="register">
        <h1>Sign Up</h1>
        <div>
            <label for="username">Fullname:</label>
            <input type="text" name="name" id="name" required="">
        </div>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required="">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required="">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required="">
        </div>
        <div>
            <label for="password2">Password Again:</label>
            <input type="password" name="password2" id="password2" required="">
        </div>
        <div>
            <label for="agree" required="">
                <input type="checkbox" name="agree" id="agree" value="yes" required=""/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
        <button type="submit">Register</button>
        <footer>Already a member? <a href="login.php">Login here</a></footer>
    </form>
</main>
</body>
</html>