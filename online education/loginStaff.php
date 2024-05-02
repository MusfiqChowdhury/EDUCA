<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Login</title>
  <link rel="icon" href="education.png" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
    font-family: 'Poppins', sans-serif;
    background-color: #7e91e4;
    background-image: url(images/laptop\ login.jpg);
    background-size: cover; /* Cover the entire viewport */
    background-position: center; /* Center the background image */
    background-repeat: no-repeat; /* Prevent the image from repeating */
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0; /* Remove default body margin */
    padding: 0; /* Remove default body padding */
}


    .container {

      background-color: #228bb0fd ;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(209, 204, 204, 0.1);
      padding: 40px;
      width: 400px;
      max-width: 90%;
      text-align: center; /* Center text within container */
    }

    .container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group label {
      display: block;
      margin-bottom: 5px;
      color: #333;
      font-weight: 500;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .btn {
      display: block;
      width: 100%;
      padding: 10px;
      font-size: 16px;
      color: #fff;
      background-color: #007bff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .btn:hover {
      background-color: #0056b3;
    }

    .error-msg {
      color: #ff0000;
      margin-top: 5px;
      font-size: 14px;
    }

    .create-account {
      margin-top: 20px; /* Add space between button and text */
      color: #333;
    }

    .register-btn {
      margin-top: 20px;
      color: white;
      background-color: #0c78eb;
      height: 30px;
      width: 80px;
      padding: 0;
      margin: 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Staff Login</h2>
    <form id="loginForm" class="login-form" action="#" method="POST">
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <a href="Home_Staff.html" class="btn">Login</a>
      <div id="errorMsg" class="error-msg"></div>
      <p class="create-account">No Account? Please Create</p> <!-- Added text -->
      <a href="RegistrationStaff.html" class="register-link">Register</a> <!-- Added registration button -->
    </form>
  </div>

  <script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
      var email = document.getElementById('email').value;
      var password = document.getElementById('password').value;
      var errorMsg = document.getElementById('errorMsg');

      errorMsg.textContent = '';

      if (!email || !password) {
        event.preventDefault();
        errorMsg.textContent = 'Please fill in all fields.';
      }
    });
  </script>
</body>
</html>
