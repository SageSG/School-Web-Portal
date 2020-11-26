<html lang = "en">
    <head>
        <title>Login</title>
        <?php
        include "head.php";
        //Declare session
        session_start();
        ?>
    </head>
    <body>

        <?php
        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */
        include "navbar.php";
        
        $email = $_POST['loginemail'];
        $password = $_POST['pwd'];
        
        //        check if password field is empty
        if (empty($_POST["pwd"])) {
            $errorMsg .= "Empty password.<br>";
            $success = false;
        } else {
            $password = $_POST['pwd'];
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        }
        ?>
        <header class="jumbotron text-center">
            <?php
            if(authenticateUser()){
                $success = false;
            }else{
                $success = true;
            };
            authenticateUser(); 
            if ($success) { 
                echo "<h3 class='display-4'> Login successful, " . $lname . "!</h3>";
                echo "<br>";
            } else {
                echo "<h4>The following input errors were detected:</h4>";
                echo "<p>" . $errorMsg . "</p>";
                echo "<a href='register.php' role='button' class='btn btn-danger'>Re-register</a>";
            }
            ?>
        </header>
        <main class="container text-center">
            <?php
                if ($success) { 
                echo "<p> Redirecting to Main Menu in <span id='counter'>3</span> s, else </p>";
                echo "<br";
                echo "<p><a href='index.php' role='button' class='btn btn-success'>Click Here</a></p>";
                }
            ?>
        </main>
         <script>
        setInterval(function() {
            var div = document.querySelector("#counter");
            var count = div.textContent * 1 - 1;
            div.textContent = count;
            if (count <= 0) {
                window.location.replace("http://34.224.205.147/lab09/index.php");
            }
        }, 1000);
        </script>
        <?php
        
        /*
         * Helper function to authenticate the login.
         */

        function authenticateUser() {
            global $fname, $lname, $email, $hashed_password, $errorMsg, $success;
            // Create database connection.
            $config = parse_ini_file('../../private/db-config.ini');
            $conn = new mysqli($config['servername'], $config['username'],
                    $config['password'], $config['dbname']);
            // Check connection
            if ($conn->connect_error) {
                $errorMsg = "Connection failed: " . $conn->connect_error;
                $success = false;
            } else {
                // Prepare the statement:
                $stmt = $conn->prepare("SELECT * FROM world_of_pets_members WHERE email=?");
                // Bind & execute the query statement:
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    // Note that email field is unique, so should only have
                    // one row in the result set.
                    $row = $result->fetch_assoc();
                    $fname = $row["fname"];
                    $lname = $row["lname"];
                    $hashed_password = $row["password"];
                    // Check if the password matches:
                    if (!password_verify($_POST["pwd"], $hashed_password)) {
                        // Don't be too specific with the error message - hackers don't
                        // need to know which one they got right or wrong. :)
                        $errorMsg = "Email not found or password doesn't match...";
                        $success = false;
                    }
                } else {
                    $errorMsg = "Email not found or password doesn't match...";
                    $success = false;
                }
                $stmt->close();
            }
            $conn->close();
            // Storing session data
            $_SESSION["firstname"] = $fname;
            $_SESSION["lastname"] = $lname;
            
        }
        include "footer.inc.php";
        ?>
    </body>
</html>