<?php
// TODO: Start the session

// TODO: Retrieve the theme preference from cookies (default: light mode)

// TODO: Handle username input and store it in a session

// TODO: Handle theme selection and save it in a cookie
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Final Project</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            /* TODO: Use PHP to set background and text color based on the theme */
        }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; background: #f4f4f4; }
        h1 { text-align: center; background: #0073e6; color: white; padding: 15px; }
        .error { color: red; }
    </style>
</head>
<body>

<h1>PHP Final Project</h1>
<p>Today's Date: <!-- TODO: Display the current date using PHP --></p>

<!-- TODO: Create a form to select and update the theme -->
<form method="POST">
    <label>Select Theme:</label>
    <select name="theme">
        <option value="light">Light</option>
        <option value="dark">Dark</option>
    </select>
    <input type="submit" name="set_theme" value="Apply Theme">
</form>

<!-- TODO: Display the logged-in user's name using session data -->
<p>Current User: <!-- TODO: Display username if session exists, otherwise show "Guest" --></p>

