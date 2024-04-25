<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Form Submission</h1>
    <p>Thank you for submitting the form!</p>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
    }
    ?>
</body>
</html>