<html>
<head>
<title>JobConnect Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #4B2346; 
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .login-container {
        background: #fff;
        color: #333333ff;
        padding: 40px;
        border-radius: 10px;
        width: 25%;
        box-shadow: 0px 5px 20px #00000033;
        text-align: center;
    }

    .login-container h1 {
        color: #4B2346;
        margin-bottom: 10px;
        font-size: 28px;
    }

    .login-container p {
        margin-bottom: 20px;
        color: #666666ff;
    }

    .form-group {
        margin-bottom: 15px;
        text-align: left;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        font-size: 14px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border-radius: 20px;
        border: 1px solid #ccccccff;
        font-size: 14px;
    }

    .login-btn {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 20px;
        background-color: #4B2346;
        color: #ffffff;
        font-size: 16px;
        cursor: pointer;
        margin-top: 10px;
    }

    .login-btn:hover {
        background-color: #361833;
    }

    .extra-links {
        margin-top: 15px;
        font-size: 14px;
    }

    .extra-links a {
        color: #4B2346;
        text-decoration: none;
        font-weight: bold;
    }

    .extra-links a:hover {
        text-decoration: underline;
    }

    .logo {
        margin-bottom: 20px;
    }

    .logo img {
        width: 80px;
        height: 80px;
    }

    @media (max-width: 768px) {
        .login-container {
            width: 900%;
        }
    }

</style>
</head>
<body>

<div class="login-container">
    <div class="logo">

        <img src="images/Logonocircle.png" alt="JobConnect Logo">
    </div>
    <h1>JobConnect</h1>
    <p>Log in to continue</p>

    <form>
        <div class="form-group">
            <label>Email Address</label>
            <input type="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="login-btn">Log In</button>
    </form>

    <div class="extra-links">
        <p><a href="#">Forgot Password?</a></p>
        <p>Don’t have an account? <a href="#">Register</a></p>
    </div>
</div>

</body>
</html>
