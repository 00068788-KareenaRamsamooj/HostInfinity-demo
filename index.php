<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>HostInfinity Demo</title>
    <link rel="stylesheet" href="Styles.css" />
    <script src="Main.js" defer></script>
</head>
<body>

<div class="container">
    <h1>Welcome to HostInfinity Demo</h1>
    <p>This is a simple HTML + PHP website deployed to InfinityFree.</p>

    <form action="Process_Form.php" method="POST">
        <label for="fullname">Full Name:</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Submit</button>
    </form>

    <p id="message"></p>
</div>

</body>
</html>

