<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up</title>
<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
        background-image: url('https://wallpaperbat.com/img/777953-wallpaper-trade-and-commerce-world-map-over-city-at-night-wallpaper-for-you.jpg'); /* Replace 'your_image_url.jpg' with the URL of your image */
        height : 100vh ; 
        background-size: cover;
        background-position: center;
        position: relative;
    }
    .logo {
       
        position: absolute;
        top: 20px;
        left: 20px;
        width: 100px; /* Adjust width as needed */
        height: auto; /* Maintain aspect ratio */
        z-index: 2; /* Ensure it's above the background image */
    }
    .container {
        position: relative;
        z-index: 1;
        width: 100%;
        max-width: 400px;
        margin: 100px auto;
        margin-top: 100px; /* Move the container to the top */
        margin-bottom: 20px;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.3);;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .error {
        color: red;
        font-size: 14px;
        margin-top: 5px;

    h1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #000000;
        font-size: 32px;
        text-align: center;
        z-index: 2; /* Ensure it's above the container */
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        
    }
    }
</style>
</head>
<body>
<h1 align="center" style="color: black; text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.5);background-color: rgba(255, 255, 255, 0.5);">HEALTHY STORE</h1>

<img src="https://thumbs.dreamstime.com/b/travel-vector-logo-business-colorful-logo-travel-vector-logo-business-colorful-logo-geometric-emblem-112551364.jpg" alt="Logo" class="logo">
<div class="container">
    <h2>Sign Up</h2>
    <form id="signup-form" method="post" action="signup_process.php">
        <input type="text" id="username" name="username" placeholder="Username" required>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <input type="submit" value="Sign Up">
    </form>
</div>
</body>
</html>
