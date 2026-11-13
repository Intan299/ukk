<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PETUGAS</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <header>LOGIN PETUGAS</header>

    <form action="proses_login.php" method="post">
        <table class="form-table">
            <p>
                <label>Username</label>
                <input type="text" name="username" placeholder="Isi username" required>
            </p>

            <p>
                <label>Password</label>
                <input type="password" name="password" placeholder="Isi password" required>
            </p>

            <input type="hidden" name="akses" value="petugas">

            <p>
                <button type="submit">LOGIN</button>
            </p>
        </table>
    </form>

</body>
</html>
