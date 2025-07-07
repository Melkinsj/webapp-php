<!DOCTYPE html>
<html>
<head>
    <title>PHP Greeting Form</title>
</head>
<body>

<?php
$name = "";
$greeting = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["name"])) {
        $name = htmlspecialchars($_POST["name"]);
        $greeting = "Hello, " . $name . "! Welcome to PHP!";
    } else {
        $greeting = "Please enter your name.";
    }
}
?>

<h2>Enter Your Name</h2>
<form method="post" action="">
    <input type="text" name="name" placeholder="Your name" value="<?php echo $name; ?>">
    <input type="submit" value="Submit">
</form>

<p><?php echo $greeting; ?></p>

</body>
</html>
