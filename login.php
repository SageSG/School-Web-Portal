<html lang = "en">
    <head>
        <title>Login</title>
        <?php
            include "head.php";
        ?>
    </head>
<body>
        <?php
        include "navbar.php";
        ?>
        <header class="jumbotron text-center">
            <h1 class="display-4">Member Login</h1>
            <p>
                For new members, please go to
                <a href="/register.php"> register </a>
            </p>
            </header>
    <main class="container">
        <form action="login_process.php" method="post">
            
                <div class="form-group">
                <label for="loginemail">E-mail:</label>
                <input class="form-control" type="loginemail" id="loginemail" name="loginemail"
                       maxlength="45" placeholder="E-mail">
                </div>
                <div class="form-group">
                <label for="pwd">Password:</label>
                <input class="form-control" type="password" id="pwd" required name="pwd"
                       placeholder="Enter password">
                </div>
                <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
    </main>
    <?php
        include "footer.php";
        ?>
</body>
</html>