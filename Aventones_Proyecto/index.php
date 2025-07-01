<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aventones</title>
    <link rel="stylesheet" href="styles.css" />

<body>
    <img src="imagenes/logoAventones.png" alt="Logo">
    <br>
    <br>
    <form action="views/bookings.php" method="GET">
        <section class="titulos">
            <strong><a href="google.com">Sign in with Google</a></strong>
            <strong>
                <p>Or</p>
            </strong>
        </section>
        <div class="form">
            <p>Username</p>
            <input type="text" name="username" id="username">
            <p>Password</p>
            <input type="password" name="password" id="password">
        </div>
        <br>
        <p>Not an user? <a href="#">Register Now</a></p>
        <button type="submit" class="btn">Login</button>
    </form>
    </section>
</body>

</html>