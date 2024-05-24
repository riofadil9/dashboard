<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register Page</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap');
    *{
        font-family: "Poppins", sans-serif;
    }
    body {
        background-color: #111827;
        font-family: Arial, sans-serif;
    }
    .container {
        width: 300px;
        margin: 0 auto;
        margin-top: 100px;
    }
    .container .imglogin{
    width: 100%;
    height: auto;
    margin-right: 8px;
    }
    input[type="text"], input[type="email"], input[type="password"], input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
    h2{
        text-align: center;
        color: white;
    }
</style>
</head>
<body>
<div class="container">
    <img class="imglogin" src="../public/img/Logo.png" alt="">
    <h2>Register Page</h2>
    <form id="registerForm">
        <input type="text" id="username" placeholder="Username" required>
        <input type="email" id="email" placeholder="Email" required>
        <input type="password" id="password" placeholder="Password" required>
        <input type="password" id="confirmPassword" placeholder="Confirm Password" required>
        <input type="submit" value="Register">
    </form>
</div>

<script>
    document.getElementById("registerForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent default form submission

        // Get the input values
        var username = document.getElementById("username").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;

        // Check if passwords match
        if (password !== confirmPassword) {
            alert("Passwords do not match. Please try again.");
            return;
        }

        // Simulate registration process
        // In a real application, you would send this data to the server for processing
        alert("Registration successful! Please log in with your new account.");

        // Redirect to login page
        window.location.href = "/login";
    });
</script>
</body>
</html>
