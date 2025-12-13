<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    function clean($data) {
        return htmlspecialchars(trim($data));
    }

    $fullname = clean($_POST['fullname'] ?? '');
    $email    = clean($_POST['email'] ?? '');
    $phone    = clean($_POST['phone'] ?? '');
    $age      = clean($_POST['age'] ?? '');
    $gender   = clean($_POST['gender'] ?? '');
    $message  = clean($_POST['message'] ?? '');

    echo "<!DOCTYPE html>";
    echo "<html lang='en'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<title>Form Submitted</title>";
    echo "<link rel='stylesheet' href='Styles.css'>";
    echo "</head>";
    echo "<body>";

    echo "<div class='container'>";
    echo "<h1>✨ Form Submitted Successfully ✨</h1>";
    echo "<p><strong>Name:</strong> $fullname</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Message:</strong> $message</p>";
    echo "<br>";
    echo "<a href='index.php'>⬅ Go Back</a>";
    echo "</div>";

    echo "</body>";
    echo "</html>";

} else {
    echo "Invalid request.";
}
?>