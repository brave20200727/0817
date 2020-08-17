<?php
 session_start();
 if(isset($_POST["okButton"])) {
    $_SESSION["who"] = $_POST["userNameTextBox"];
    header("location: hello.php");
    exit();
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <form method="post" action="">
        Your name:
        <input type="text" name="userNameTextBox" placeholder="^_^"> <!-- make a textbox for user input name -->
        <input type="submit" name="okButton" value="OK"> <!-- make a submit button for send submit-->
    </form>
</body>
</html>