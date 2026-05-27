<form method="post">
    <input type="submit" name="logout" value="Logout">
</form>

<?php
session_start();
if (!isset($_SESSION["uname"])) {
    header("Location: index.php");
    exit();
}
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
$uname = $_SESSION['uname'];
$pass = $_SESSION['pass'];
echo "Username: $uname<br>Password: $pass<br>";
?>