<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);

    echo "<h2>Form Submitted Successfully!</h2>";
    echo "<p><strong>Name:</strong> $fullname</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<a href='Index.php'>Go Back</a>";

} else {
    echo "Invalid request.";
}

?>
