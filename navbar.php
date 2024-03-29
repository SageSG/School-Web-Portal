<script defer
        src="js/show.js">
</script>
<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark">
    <a class="navbar-brand" href="/index.php">
        Miracle
        <img src="images/real.png" width="50" height="50" alt="MiracleSchool"/>
        School
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="/index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/ccahomepage.php">Events & CCAs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/signup.php">Sports & Adventure</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/oversea.php">Trips & Exchanges</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contactus.php">Contact Us</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <!-- Admin settings -->
            <?php
            if ($_SESSION['uid']) {
                echo "<li class='nav-item dropdown'>";
                echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown1' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
                echo "Hi, " . $userDetails->name . " <i class='fas fa-cogs'></i>";
                echo "</a>";
                echo "<div class='dropdown-menu' aria-labelledby='navbarDropdown1'>";
                if ($_SESSION['uid'] == "8888") {
                    echo "<a class='dropdown-item' href='/edit.php'>Account Settings</a>";
                    echo "<div class='dropdown-divider'></div>";
                    echo "<a class='dropdown-item' href='/viewaccount.php'>Search For User</a>";
                    echo "<div class='dropdown-divider'></div>";
                    echo "<a class='dropdown-item' href='/viewall.php'>View All Accounts</a>";
                    echo "<div class='dropdown-divider'></div>";
                    echo "<a class='dropdown-item' href='/viewcca.php'>View Student CCAs</a>";
                } else {
                    echo "<a class='dropdown-item' href='/account.php'>Edit Profile</a>";
                    echo "<div class='dropdown-divider'></div>";
                    echo "<a class='dropdown-item' href='/signup.php'>Signup for CCA</a>";
                    echo "<div class='dropdown-divider'></div>";
                    echo "<a class='dropdown-item' href='/ccauser.php'>Check my CCA</a>";
                }
                echo "</div></li>";
                echo "<li class='nav-item'>";
                echo "<a class='nav-link' href='/logout.php'>Logout <i class='fas fa-door-open login_logo'></i></a></li>";
            } else {
                echo "<li class='nav-item'>";
                echo "<a class='nav-link' href='/register.php'>Login <i class='fas fa-door-open login_logo'></i></a></li>";
            };
            ?>
        </ul>
    </div>
</nav>