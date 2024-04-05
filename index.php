<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
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
    input[type="text"], input[type="password"], input[type="submit"] {
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
    <img class="imglogin" src="asset/Logo.png" alt="">
    <h2>Login Page</h2>
    <form id="loginForm">
        <input type="text" id="username" placeholder="Username" required>
        <input type="password" id="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
</div>

<script>
    document.getElementById("loginForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent default form submission

        // Get the input values
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        // Check if username and password are correct
        if (username === "admin" && password === "123") {
            // Redirect to dashboard page
            window.location.href = "dashboard.php";
        } else {
            // Show error message (for simplicity, alert is used)
            alert("Invalid username or password. Please try again.");
        }
    });
</script>
</body>
</html>
