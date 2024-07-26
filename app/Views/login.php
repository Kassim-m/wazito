<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .form-container {
        background-color: #bcf9b4;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        width: 80%;
        max-width: 500px;
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 30px;
        color: #333333;
    }

    .form-group {
        margin-bottom: 30px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
        color: #555555;
    }
    .success-message {
        color: white;
        background-color: #1B4D3E;
        border: 1px solid #1B4D3E;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 4px;
        }
    .error-message {
        color: #d9534f;
        background-color: #007FFF;
        border: 1px solid #d9534f;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 4px;
        }
    .form-group input[type="text"],
    .form-group input[type="password"] {
        width: 100%;
        padding: 15px;
        border: 1px solid #dddddd;
        border-radius: 10px;
        color: #555555;
    }

    .btn-container {
        display: flex;
        justify-content: space-between;
    }

    .btn-container button {
        padding: 15px 30px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        font-size: 16px;
        font-weight: bold;
    }

    .btn-container button.cancel {
        background-color: #691717;
        color: #ffffff;
    }

    .btn-container button.login {
        background-color: #3cb371;
        color: #ffffff;
    }

    .btn-container button:hover {
        filter: brightness(90%);
    }

    @media only screen and (max-width: 600px) {
        .form-container {
            width: 90%;
        }
    }
</style>
</head>
<body>
<div class="form-container">
    <h2>Login</h2>
    <form id="registration-form" action="processlogin" method="post">
    <?php if (isset($message) && !empty($message)): ?>
            <div class="success-message"><?php echo $message; ?></div>
        <?php endif; ?>
        <?php if (isset($error) && !empty($error)): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <p>Don't have an account?<a href="register" style="color:dodgerblue">Register</a>.</p>
        <div class="btn-container">
            <button type="button" class="cancel" onclick="return clearfields();">Cancel</button>
            <button type="submit" class="login" value="submit">Login</button>
        </div>
    </form>

<script>
    function clearfields() {
      var username = document.getElementById("username").value="";
      var password = document.getElementById("password").value="";
    }

</script>
</div>
</body>
</html>
