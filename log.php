<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
        background-image: url('https://th.bing.com/th/id/R.62b6d6036fbf245bd523b7ea7e50885b?rik=FkazpSM%2fBjLtwQ&riu=http%3a%2f%2falijohnson.org.uk%2fwp-content%2fuploads%2f2013%2f10%2fblack-world-map-wallpaper-hd-wallpapers-background-in-travel-1024x819.jpg&ehk=uiAfQ0FvF4evnGlGeXzV2jhKKkB5vdenHkoH%2b5C4nyk%3d&risl=&pid=ImgRaw&r=0'); /* Add your image URL here */
        height:100vh;
        background-size: cover;
        background-position: center;
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
    }
</style>
</head>
<body>
<h1 align="center" style="color:blacke; text-shadow: 2px 2px 5px rgba(255, 255, 255, 0.5);background-color: rgba(255, 255, 255, 0.5);">HEALTHY STORE</h1>
<img src="https://thumbs.dreamstime.com/b/travel-vector-logo-business-colorful-logo-travel-vector-logo-business-colorful-logo-geometric-emblem-112551364.jpg" alt="Logo" class="logo">
<div class="container">
    <h2>Login</h2>
    <form id="login-form" method="post" action="log_process.php">
        <input type="text" id="username" name="username" placeholder="Username" required>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
</div>
</body>
</html>
