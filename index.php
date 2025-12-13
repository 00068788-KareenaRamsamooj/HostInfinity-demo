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
    <p class="subtitle">Please fill out the form below</p>

    <form action="Process_Form.php" method="POST">

        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone">

        <label for="age">Age</label>
        <input type="number" id="age" name="age" min="1">

        <label for="gender">Gender</label>
        <select id="gender" name="gender">
            <option value="">Select</option>
            <option>Female</option>
            <option>Male</option>
            <option>Other</option>
        </select>

        <label for="messageBox">Message</label>
        <textarea id="messageBox" name="message" rows="4"></textarea>

        <button type="submit">Submit</button>
    </form>

    <p id="message"></p>
</div>

</body>
</html>

