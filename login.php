<?php
// cek apakah tombol submit sudah dipencet belum
if (isset($_POST["submit"])) {

    // cek username dan password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
        // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        // jika salah tampilkan pesan kesalahan
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <section class="header">
        <?php if (isset($error)) : ?>
            <p style="color: red; font-style:italic ">Username / Password Salah!</p>
        <?php endif; ?>
    </section>
    <ul>
        <form action="" method="post">
            <div class="login">
                <h1>Login Admin</h1>
                <li class="input-group">
                    <label for="username">
                        <span> Username </span>
                    </label>
                    <input type="text" name="username" id="username">
                </li>

                <div class="input-group">
                    <label for="password">
                        <span> Password </span>
                    </label>
                    <input type="password" name="password" id="password">
                </div>



                <div class="input-group">
                    <button type="submit" name="submit">Login</button>
                </div>

            </div>

        </form>
    </ul>
    <div class="text-center">
        <a class="small" href="registration.php">Create an Account!</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


</body>

</html>