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
  .error-message {
        color: #d9534f;
        background-color: #f2dede;
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

    .btn-container button.register {
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
    <h2>Registration</h2>
    <form id="registration-form" action="processregistration" method="post" onsubmit="return validateCredentials();">
        <div class="form-group">
        <?php if (isset($error) && !empty($error)): ?>
            <div class="error-message"><?php echo $error; ?></div>
        <?php endif; ?>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>
        </div>
        <p>Already have an account?<a href="login" style="color:dodgerblue">Login</a>.</p>
        <div class="btn-container">
            <button type="button" class="cancel" onclick="return clearfields();">Cancel</button>
            <button type="submit" class="register" value="submit">Register</button>
        </div>
    </form>
</div>
<script>

function validateCredentials() {
     var password = document.getElementById("password").value;
     var confirm_password = document.getElementById("confirm_password").value;
     var username = document.getElementById("username").value;

     if (password != confirm_password) {
        alert("Passwords do not match. Please enter passwords that match.");
          return false;
     }
     
     if (password.length < 6 || password.length > 20) {
        alert("Password must be between 6 and 20 characters.");
        return false;
     }
    
     if (!/[A-Z]/.test(password)) {
        alert("Password must contain at least one uppercase letter.");
        return false;
     }
    
     if (!/[a-z]/.test(password)) {
        alert("Password must contain at least one lowercase letter.");
        return false;
     }
    
     
     if (!/[0-9]/.test(password)) {
        alert("Password must contain at least one digit.");
        return false;
     }
    
     if (username.length < 3 || username.length > 20) {
        alert("Username must be between 3 and 20 characters.");
        return false;
     }
    
  
      if (!/^[a-zA-Z0-9_]+$/.test(username)) {
        alert("Username must contain only alphanumeric characters and underscores.");
        return false;
     }
    return true;
}

    function clearfields() {
      var username = document.getElementById("username").value="";
      var password = document.getElementById("password").value="";
      var confirm_password = document.getElementById("confirm_password").value="";
    }

</script>
</body>
</html>
