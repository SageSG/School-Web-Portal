 <?php
include('config.php');
$session_uid='';
$session_googleCode='';
$_SESSION['uid']=''; 
$_SESSION['googleCode']='';
session_unset();
session_destroy();
?>

<p> Redirecting to Main Menu in <span id='counter'>3</span> s, else </p>
<br>
              <p><a href='index.php' role='button' class='btn btn-success'>Click Here</a></p>
              
              <script>
        setInterval(function() {
            var div = document.querySelector("#counter");
            var count = div.textContent * 1 - 1;
            div.textContent = count;
            if (count <= 0) {
                window.location.replace("http://34.198.106.227/index.php");
            }
        }, 1000);
        </script>
