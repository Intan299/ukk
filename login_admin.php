<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN ADMIN</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <main class="container">
        <section class="card">
            <header> ISI DIBAWAH INI UNTUK ADMIN</header>
            <form action="proses_login.php" method="post">
        <table class="form-table">
            <p>
                <label for="username">username</label>
                <input type="text" name="username" placeholder="isi username">
            </p>

            <p>
                <label for="password">password</label>
                <input type="text" name="password" placeholder=" isi password">
            </p>

            <p>
                <button type="submit">LOGIN</button>
            </p>
</table>
    </form>
        </section>
    </main>
</body>
</html>