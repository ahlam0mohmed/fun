
//$GLOBALS
<?php
$x = 34;
$y = 76;
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z; //output:110
?>
//$_SERVER
<?php
echo $_SERVER['HTTP_HOST']; //output: 35.194.26.41
?>
//$_REQUEST
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = htmlspecialchars($_REQUEST['fname']);// used to collect data after submitting an HTML form.
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
//$_POST
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = $_POST['fname'];// used to pass variables
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
//$_GET
<html>
<body>
<a href="www.com">Test $GET</a>
<?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];// collect data sent in the URL
?>
</body>
</html>
//$_FILES
<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<?php
if ($_FILES["file"] > 0)//  used to upload files
  {
  echo "You have selected a file to upload";
  }
?>
//$_ENV
<?php
echo $_ENV['username'];// return the environment variables from the web server.
?>
//$_COOKIE
<?php
setrawcookie();
print_r($_COOKIE);
?>
//$_SESSION
<?php
session_start();
$_SESSION['GIZ']='The Coding Academy’;
echo $_SESSION['GIZ'];
?>
