<form method="POST">
        <h1>Contact Form</h1>
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="mail" required><br>
        Message: <textarea name="msg" required></textarea>
        <input type="submit" name="submit">
</form>
<?php
if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["mail"];
        $msg = $_POST["msg"];
        echo "<h3>Submited Information</h3>
        <br>Name: $name<br>Email: 
        $email<br>Message: $msg";
}
?>